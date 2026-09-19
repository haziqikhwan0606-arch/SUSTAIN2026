<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function conference(): View
    {
        return view('pages.conference');
    }

    public function tracks(): View
    {
        return view('pages.tracks');
    }

    public function speakers(): View
    {
        return view('pages.speakers');
    }

    public function symposium(): View
    {
        return view('pages.symposium');
    }

    public function awards(): View
    {
        return view('pages.awards');
    }

    public function exhibition(): View
    {
        return view('pages.exhibition');
    }

    public function impact(): View
    {
        return view('pages.impact');
    }

    public function gsed(): View
    {
        return view('pages.gsed');
    }

    public function venue(): View
    {
        return view('pages.venue');
    }
}
