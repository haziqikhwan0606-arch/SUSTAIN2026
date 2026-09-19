<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    /**
     * Display all registrations with search and filter capabilities.
     */
    public function index(Request $request): View
    {
        $search = trim($request->input('search', ''));
        $participantType = trim($request->input('participant_type', ''));
        $interest = trim($request->input('interest', ''));

        $query = Registration::query();

        // Search across 10 relevant columns mirroring legacy behavior
        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $term = "%{$search}%";
                $q->where('first_name', 'LIKE', $term)
                  ->orWhere('last_name', 'LIKE', $term)
                  ->orWhere('email', 'LIKE', $term)
                  ->orWhere('organisation', 'LIKE', $term)
                  ->orWhere('mobile', 'LIKE', $term)
                  ->orWhere('role', 'LIKE', $term)
                  ->orWhere('business_nature', 'LIKE', $term)
                  ->orWhere('city', 'LIKE', $term)
                  ->orWhere('state', 'LIKE', $term)
                  ->orWhere('country', 'LIKE', $term);
            });
        }

        // Filter by participant type
        if ($participantType !== '') {
            $query->where('participant_type', $participantType);
        }

        // Filter by interest area
        if ($interest !== '') {
            $query->where('interest', $interest);
        }

        $registrations = $query->orderBy('registered_at', 'desc')->get();
        $totalCount = Registration::count(); $total = $totalCount;

        return view('admin.registrations', compact('registrations', 'total', 'totalCount', 'search', 'participantType', 'interest'));
    }
}
