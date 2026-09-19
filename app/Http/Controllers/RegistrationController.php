<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationConfirmationMail;
use App\Models\Registration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    /**
     * Show registration form.
     */
    public function create(): View
    {
        return view('pages.register');
    }

    /**
     * Handle registration form submission.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:50',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'mobile' => 'required|string|max:50',
            'organisation' => 'required|string|max:150',
            'role' => 'required|string|max:100',
            'business_nature' => 'nullable|string|max:150',
            'organisation_type' => 'required|string|max:50',
            'address' => 'nullable|string',
            'postcode' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'country' => 'required|string|max:100',
            'participant_type' => 'required|string|max:50',
            'interest' => 'required|string|max:50',
            'hear_about' => 'nullable|string|max:100',
            'referral_source' => 'nullable|string|max:150',
            'consent' => 'accepted',
        ], [
            'consent.accepted' => 'Please accept the consent checkbox to proceed.',
        ]);

        $validated['consent'] = true;
        $validated['registered_at'] = now();

        $registration = Registration::create($validated);

        // Attempt sending confirmation email
        try {
            Mail::to($registration->email)->send(new RegistrationConfirmationMail($registration));
        } catch (\Throwable $e) {
            Log::warning('Registration email could not be sent: ' . $e->getMessage());
            return back()->with('success', true)->with('error', 'Registration saved, but confirmation email could not be sent.');
        }

        return back()->with('success', true);
    }
}
