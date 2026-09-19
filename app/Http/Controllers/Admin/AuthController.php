<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Show admin login form.
     */
    public function showLogin(): View|RedirectResponse
    {
        if (session('admin_logged_in') === true) {
            return redirect()->route('admin.registrations');
        }

        return view('admin.login');
    }

    /**
     * Authenticate admin credentials.
     */
    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $adminUser = env('ADMIN_USERNAME', 'admin');
        $adminPass = env('ADMIN_PASSWORD', 'sustain2026');

        if ($request->input('username') === $adminUser && $request->input('password') === $adminPass) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.registrations');
        }

        return back()->with('error', 'Invalid username or password.')->withInput();
    }

    /**
     * Admin logout.
     */
    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('admin_logged_in');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
