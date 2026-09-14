<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SUSTAIN 2026 — Malaysia Sustainability & ESG Conference">
    <meta name="theme-color" content="#111311">

    <title>{{ $pageTitle ?? 'SUSTAIN 2026 — Malaysia Sustainability & ESG Conference' }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body>

<!-- =========================================================
     SITE HEADER
========================================================= -->
<header class="site-header">
    <div class="site-header__inner">

        <!-- LOGO -->
        <a href="{{ route('home') }}" class="site-logo" aria-label="SUSTAIN 2026 Home">
            <img src="{{ asset('assets/images/' . (trim($__env->yieldContent('logoFile')) ?: ($logoFile ?? 'logo/logo.png'))) }}" alt="SUSTAIN 2026">
        </a>

        <!-- DESKTOP NAVIGATION -->
        <nav class="main-nav" aria-label="Main navigation">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('conference') }}" class="{{ request()->routeIs('conference') ? 'active' : '' }}">Conference</a>
            <a href="{{ route('speakers') }}" class="{{ request()->routeIs('speakers') ? 'active' : '' }}">Speakers</a>
            <a href="{{ route('impact') }}" class="{{ request()->routeIs('impact') ? 'active' : '' }}">Impact</a>
            <a href="{{ route('venue') }}" class="{{ request()->routeIs('venue') ? 'active' : '' }}">Venue</a>
        </nav>

        <!-- HEADER ACTIONS -->
        <div class="header-actions">
            @if(session('admin_logged_in'))
                <a href="{{ route('admin.registrations') }}" class="header-login header-login--active">
                    <span>Admin</span>
                </a>
                <a href="{{ route('admin.logout') }}" class="header-login" onclick="event.preventDefault(); document.getElementById('header-logout-form').submit();">
                    <span>Logout</span>
                </a>
                <form id="header-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('admin.login') }}" class="header-login">
                    <span>Login</span>
                </a>
            @endif

            <a href="{{ route('register') }}" class="header-register">
                <span>Register</span>
                <span aria-hidden="true">↗</span>
            </a>
        </div>

        <!-- MOBILE MENU BUTTON -->
        <button class="menu-toggle" type="button" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobile-navigation">
            <span></span>
            <span></span>
        </button>

    </div>

    <!-- MOBILE NAVIGATION -->
    <div class="mobile-nav" id="mobile-navigation">
        <div class="mobile-nav__inner">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('conference') }}">Conference</a>
            <a href="{{ route('speakers') }}">Speakers</a>
            <a href="{{ route('symposium') }}">Symposium</a>
            <a href="{{ route('awards') }}">Impact Awards</a>
            <a href="{{ route('exhibition') }}">Exhibition</a>
            <a href="{{ route('impact') }}">Impact</a>
            <a href="{{ route('gsed') }}">GSED</a>
            <a href="{{ route('venue') }}">Venue</a>

            @if(session('admin_logged_in'))
                <a href="{{ route('admin.registrations') }}">Admin Panel</a>
                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('mobile-logout-form').submit();">Logout</a>
                <form id="mobile-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('admin.login') }}">Login</a>
            @endif

            <a href="{{ route('register') }}" class="mobile-nav__register">
                <span>Register for SUSTAIN 2026</span>
                <span aria-hidden="true">↗</span>
            </a>
        </div>
    </div>
</header>

@yield('content')

<!-- =====================================================
     FOOTER
====================================================== -->
<footer class="site-footer">
    <div class="container">
        <div class="site-footer__top">

            <!-- BRAND -->
            <div class="site-footer__brand">
                <a href="{{ route('home') }}" class="site-footer__logo">
                    SUSTAIN <span>2026</span>
                </a>
                <p>
                    Malaysia Sustainability<br>
                    &amp; ESG Conference
                </p>
            </div>

            <!-- NAVIGATION -->
            <div class="site-footer__nav">

                <div class="footer-column">
                    <span class="footer-column__title">EXPLORE</span>
                    <a href="{{ route('conference') }}">Conference</a>
                    <a href="{{ route('tracks') }}">Tracks</a>
                    <a href="{{ route('speakers') }}">Speakers</a>
                    <a href="{{ route('impact') }}">Impact</a>
                </div>

                <div class="footer-column">
                    <span class="footer-column__title">EXPERIENCE</span>
                    <a href="{{ route('symposium') }}">Academic Symposium</a>
                    <a href="{{ route('awards') }}">Impact Awards</a>
                    <a href="{{ route('exhibition') }}">Exhibition</a>
                    <a href="{{ route('venue') }}">Venue</a>
                </div>

                <div class="footer-column">
                    <span class="footer-column__title">CONNECT</span>
                    <a href="{{ route('register') }}">Register</a>
                    <a href="{{ route('gsed') }}">GSED Ecosystem</a>
                </div>

            </div>

        </div>

        <!-- FOOTER BOTTOM -->
        <div class="site-footer__bottom">
            <span>&copy; {{ date('Y') }} SUSTAIN 2026</span>
            <span>Olympia Education Malaysia</span>
            <span>10 NOVEMBER 2026 &middot; BACC</span>
        </div>
    </div>
</footer>

@stack('scripts')

</body>
</html>
