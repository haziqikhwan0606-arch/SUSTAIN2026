<?php
/**
 * SUSTAIN 2026
 * Shared Header / Navigation
 *
 * Usage:
 *
 * Homepage:
 * $basePath = '';
 *
 * Inner pages:
 * $basePath = '../';
 *
 * Optional page-specific logo:
 * $logoFile = 'logo/logo.conference.png';
 *
 * Default:
 * $logoFile = 'logo/logo.png';
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = $pageTitle ?? 'SUSTAIN 2026 — Malaysia Sustainability & ESG Conference';
$basePath  = $basePath ?? '';
$logoFile  = $logoFile ?? 'logo/logo.png';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="SUSTAIN 2026 — Malaysia Sustainability & ESG Conference"
    >

    <meta
        name="theme-color"
        content="#111311"
    >

    <title>
        <?= htmlspecialchars($pageTitle); ?>
    </title>


    <!-- =====================================================
         GOOGLE FONTS
    ====================================================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >


    <!-- =====================================================
         MAIN CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="<?= $basePath; ?>assets/css/style.css"
    >

</head>


<body>


<!-- =========================================================
     SITE HEADER
========================================================= -->

<header class="site-header">

    <div class="site-header__inner">


        <!-- =================================================
             LOGO
        ================================================== -->

        <a
            href="<?= $basePath; ?>index.php"
            class="site-logo"
            aria-label="SUSTAIN 2026 Home"
        >

            <img
                src="<?= $basePath; ?>assets/images/<?= htmlspecialchars($logoFile); ?>"
                alt="SUSTAIN 2026"
            >

        </a>


        <!-- =================================================
             DESKTOP NAVIGATION
        ================================================== -->

        <nav
            class="main-nav"
            aria-label="Main navigation"
        >

            <a
                href="<?= $basePath; ?>index.php"
            >
                Home
            </a>

            <a
                href="<?= $basePath; ?>pages/conference.php"
            >
                Conference
            </a>

            <a
                href="<?= $basePath; ?>pages/speakers.php"
            >
                Speakers
            </a>

            <a
                href="<?= $basePath; ?>pages/impact.php"
            >
                Impact
            </a>

            <a
                href="<?= $basePath; ?>pages/venue.php"
            >
                Venue
            </a>

        </nav>


        <!-- =================================================
             REGISTER CTA
        ================================================== -->

        <a
            href="<?= $basePath; ?>pages/register.php"
            class="header-register"
        >

            <span>Register</span>

            <span aria-hidden="true">
                ↗
            </span>

        </a>


        <!-- =================================================
             MOBILE MENU BUTTON
        ================================================== -->

        <button
            class="menu-toggle"
            type="button"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="mobile-navigation"
        >

            <span></span>
            <span></span>

        </button>

    </div>


    <!-- =====================================================
         MOBILE NAVIGATION
    ====================================================== -->

    <div
        class="mobile-nav"
        id="mobile-navigation"
    >

        <div class="mobile-nav__inner">


            <a
                href="<?= $basePath; ?>index.php"
            >
                Home
            </a>


            <a
                href="<?= $basePath; ?>pages/conference.php"
            >
                Conference
            </a>


            <a
                href="<?= $basePath; ?>pages/speakers.php"
            >
                Speakers
            </a>


            <a
                href="<?= $basePath; ?>pages/symposium.php"
            >
                Symposium
            </a>


            <a
                href="<?= $basePath; ?>pages/awards.php"
            >
                Impact Awards
            </a>


            <a
                href="<?= $basePath; ?>pages/exhibition.php"
            >
                Exhibition
            </a>


            <a
                href="<?= $basePath; ?>pages/impact.php"
            >
                Impact
            </a>


            <a
                href="<?= $basePath; ?>pages/gsed.php"
            >
                GSED
            </a>


            <a
                href="<?= $basePath; ?>pages/venue.php"
            >
                Venue
            </a>


            <!-- MOBILE REGISTER -->

            <a
                href="<?= $basePath; ?>pages/register.php"
                class="mobile-nav__register"
            >

                <span>
                    Register for SUSTAIN 2026
                </span>

                <span aria-hidden="true">
                    ↗
                </span>

            </a>

        </div>

    </div>

</header>