<?php

namespace Tests\Feature;

use App\Mail\RegistrationConfirmationMail;
use App\Models\Registration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class RegistrationAndAdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_public_pages_load_successfully(): void
    {
        $routes = [
            '/',
            '/conference',
            '/tracks',
            '/speakers',
            '/symposium',
            '/awards',
            '/exhibition',
            '/impact',
            '/gsed',
            '/venue',
            '/register',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_user_can_submit_registration_successfully(): void
    {
        Mail::fake();

        $formData = [
            'title' => 'Dr',
            'first_name' => 'Sarah',
            'last_name' => 'Tan',
            'email' => 'sarah.tan@example.com',
            'mobile' => '+60123456789',
            'organisation' => 'Green Future Institute',
            'role' => 'Sustainability Director',
            'business_nature' => 'Environmental Consulting',
            'organisation_type' => 'corporate',
            'address' => 'Level 10, Menara Hijau, KL',
            'postcode' => '50450',
            'city' => 'Kuala Lumpur',
            'state' => 'Wilayah Persekutuan',
            'country' => 'Malaysia',
            'participant_type' => 'delegate',
            'interest' => 'conference',
            'hear_about' => 'colleague',
            'referral_source' => 'Industry Partner',
            'consent' => '1',
        ];

        $response = $this->post('/register', $formData);

        $response->assertSessionHas('success', true);
        $this->assertDatabaseHas('registrations', [
            'email' => 'sarah.tan@example.com',
            'first_name' => 'Sarah',
            'last_name' => 'Tan',
            'organisation' => 'Green Future Institute',
        ]);

        Mail::assertSent(RegistrationConfirmationMail::class, function ($mail) {
            return $mail->hasTo('sarah.tan@example.com');
        });
    }

    public function test_unauthenticated_user_cannot_access_admin_registrations(): void
    {
        $response = $this->get('/admin/registrations');
        $response->assertRedirect('/admin/login');
    }

    public function test_admin_cannot_login_with_invalid_credentials(): void
    {
        $response = $this->post('/admin/login', [
            'username' => 'admin',
            'password' => 'wrongpassword',
        ]);

        $response->assertSessionHas('error');
        $this->assertFalse(session('admin_logged_in', false));
    }

    public function test_admin_can_login_with_valid_credentials_and_view_registrations(): void
    {
        Registration::create([
            'title' => 'Mr',
            'first_name' => 'Ahmad',
            'last_name' => 'Razak',
            'email' => 'ahmad@example.com',
            'mobile' => '+60198765432',
            'organisation' => 'SolarTech',
            'role' => 'Engineer',
            'organisation_type' => 'sme',
            'country' => 'Malaysia',
            'participant_type' => 'delegate',
            'interest' => 'conference',
            'consent' => true,
        ]);

        $response = $this->post('/admin/login', [
            'username' => 'admin',
            'password' => 'sustain2026',
        ]);

        $response->assertRedirect('/admin/registrations');

        $dashboardResponse = $this->withSession(['admin_logged_in' => true])
            ->get('/admin/registrations');

        $dashboardResponse->assertStatus(200);
        $dashboardResponse->assertSee('Ahmad');
        $dashboardResponse->assertSee('SolarTech');
    }

    public function test_admin_filter_search_works(): void
    {
        Registration::create([
            'title' => 'Ms',
            'first_name' => 'Elena',
            'last_name' => 'Rostova',
            'email' => 'elena@example.com',
            'organisation' => 'Nordic Eco',
            'country' => 'Sweden',
            'participant_type' => 'speaker',
            'interest' => 'symposium',
            'consent' => true,
        ]);

        $response = $this->withSession(['admin_logged_in' => true])
            ->get('/admin/registrations?search=Nordic');

        $response->assertStatus(200);
        $response->assertSee('Elena');
        $response->assertSee('Nordic Eco');
    }

    public function test_admin_logout_destroys_session(): void
    {
        $response = $this->withSession(['admin_logged_in' => true])
            ->get('/admin/logout');

        $response->assertRedirect('/admin/login');
        $this->assertFalse(session('admin_logged_in', false));
    }
}
