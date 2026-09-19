@extends('layouts.app')

@php
    $pageTitle = 'Exhibition & Networking — SUSTAIN 2026';
@endphp

@section('logoFile', 'logo/logo.academy.png')

@section('content')
<main class="inner-page exhibition-page">


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="exhibition-hero">

        <!-- BACKGROUND VIDEO -->
        <video
            class="exhibition-hero__video"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
        >
            <source src="/assets/videos/exhibition.mp4" type="video/mp4">
        </video>

        <!-- OVERLAY -->
        <div class="exhibition-hero__overlay"></div>

        <div class="exhibition-hero__top">
            <span>CONFERENCE / 03</span>
            <span>EXHIBITION + NETWORKING</span>
        </div>

        <div class="exhibition-hero__content">

            <p class="eyebrow">
                INDUSTRY EXHIBITION &amp; ENGAGEMENT
            </p>

            <h1>
                SEE THE
                <br>
                <span>SOLUTION.</span>
            </h1>

            <p>
                Discover practical sustainability, ESG,
                technology and financing solutions built
                for real industry challenges.
            </p>

        </div>

        <div class="exhibition-hero__bottom">
            <span>20 EXHIBITION BOOTHS</span>
            <span>10 NOVEMBER 2026 · BACC</span>
        </div>

    </section>



    <!-- =====================================================
         INTRO
    ====================================================== -->

    <section class="exhibition-intro section section--light">

        <div class="container">

            <div class="exhibition-intro__grid">

                <div class="section-index">
                    01
                </div>


                <div>

                    <p class="eyebrow eyebrow--dark">
                        THE EXHIBITION
                    </p>

                    <h2>
                        DON'T JUST
                        <span>DISCUSS</span>
                        THE FUTURE.
                    </h2>

                </div>


                <div class="exhibition-intro__copy">

                    <p class="exhibition-intro__lead">
                        Sustainability becomes more meaningful
                        when ideas can be experienced, tested
                        and applied.
                    </p>

                    <p>
                        The exhibition creates an opportunity for
                        organisations to present sustainability-related
                        products, technologies, services and solutions.
                    </p>

                    <p>
                        It brings practical solutions closer to the
                        businesses, professionals and stakeholders
                        facing sustainability challenges.
                    </p>


                    <div class="exhibition-intro__meta">

                        <div>
                            <strong>20</strong>
                            <span>
                                EXHIBITION<br>
                                BOOTHS
                            </span>
                        </div>

                        <div>
                            <strong>01</strong>
                            <span>
                                INDUSTRY<br>
                                PLATFORM
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         CHALLENGE TO SOLUTION
    ====================================================== -->

    <section class="exhibition-flow section section--dark">

        <div class="container">

            <div class="exhibition-flow__heading">

                <div class="section-index section-index--light">
                    02
                </div>

                <div>

                    <p class="eyebrow">
                        THE CONNECTION
                    </p>

                    <h2>
                        FROM
                        <span>CHALLENGE</span>
                        TO APPLICATION.
                    </h2>

                </div>

            </div>


            <div class="exhibition-flow__steps">


                <div class="exhibition-flow__step">

                    <span>01</span>

                    <strong>
                        SUSTAINABILITY<br>
                        CHALLENGE
                    </strong>

                </div>


                <div class="exhibition-flow__arrow">
                    →
                </div>


                <div class="exhibition-flow__step">

                    <span>02</span>

                    <strong>
                        INNOVATION
                    </strong>

                </div>


                <div class="exhibition-flow__arrow">
                    →
                </div>


                <div class="exhibition-flow__step">

                    <span>03</span>

                    <strong>
                        SOLUTION
                    </strong>

                </div>


                <div class="exhibition-flow__arrow">
                    →
                </div>


                <div class="exhibition-flow__step exhibition-flow__step--accent">

                    <span>04</span>

                    <strong>
                        INDUSTRY<br>
                        APPLICATION
                    </strong>

                </div>


            </div>

        </div>

    </section>



   <!-- =====================================================
     SOLUTION AREAS
====================================================== -->

<section class="exhibition-solutions section section--grey">

    <div class="container">


        <div class="exhibition-solutions__heading">

            <div class="section-index">
                03
            </div>

            <div>

                <p class="eyebrow eyebrow--dark">
                    SOLUTION AREAS
                </p>

                <h2>
                    WHAT'S
                    <span>ON THE FLOOR?</span>
                </h2>

            </div>

        </div>


        <div class="solution-grid">


    <article class="solution-item">

        <img
            src="/assets/images/exhibition/1.jpg"
            alt="ESG Solutions"
            class="solution-item__image"
        >

        <div class="solution-item__overlay"></div>

        <span>01</span>

        <div>
            <h3>
                ESG<br>
                Solutions
            </h3>

            <p>
                Tools, platforms and services
                supporting ESG implementation.
            </p>
        </div>

        <strong>↗</strong>

    </article>


    <article class="solution-item">

        <img
            src="/assets/images/exhibition/2.jpg"
            alt="Sustainability Technology"
            class="solution-item__image"
        >

        <div class="solution-item__overlay"></div>

        <span>02</span>

        <div>
            <h3>
                Sustainability<br>
                Technology
            </h3>

            <p>
                Technology enabling more
                sustainable operations.
            </p>
        </div>

        <strong>↗</strong>

    </article>


    <article class="solution-item">

        <img
            src="/assets/images/exhibition/3.jpg"
            alt="Carbon Solutions"
            class="solution-item__image"
        >

        <div class="solution-item__overlay"></div>

        <span>03</span>

        <div>
            <h3>
                Carbon<br>
                Solutions
            </h3>

            <p>
                Solutions supporting carbon
                measurement and reduction.
            </p>
        </div>

        <strong>↗</strong>

    </article>


    <article class="solution-item">

        <img
            src="/assets/images/exhibition/4.jpg"
            alt="Green Technology"
            class="solution-item__image"
        >

        <div class="solution-item__overlay"></div>

        <span>04</span>

        <div>
            <h3>
                Green<br>
                Technology
            </h3>

            <p>
                Technologies designed to reduce
                environmental impact.
            </p>
        </div>

        <strong>↗</strong>

    </article>


    <article class="solution-item">

        <img
            src="/assets/images/exhibition/5.jpg"
            alt="Sustainable Finance"
            class="solution-item__image"
        >

        <div class="solution-item__overlay"></div>

        <span>05</span>

        <div>
            <h3>
                Sustainable<br>
                Finance
            </h3>

            <p>
                Financial approaches supporting
                responsible development.
            </p>
        </div>

        <strong>↗</strong>

    </article>


    <article class="solution-item">

        <img
            src="/assets/images/exhibition/6.jpg"
            alt="Built Environment Solutions"
            class="solution-item__image"
        >

        <div class="solution-item__overlay"></div>

        <span>06</span>

        <div>
            <h3>
                Built Environment<br>
                Solutions
            </h3>

            <p>
                Solutions for resilient and
                sustainable built environments.
            </p>
        </div>

        <strong>↗</strong>

    </article>


    <article class="solution-item solution-item--wide">

        <img
            src="/assets/images/exhibition/7.jpg"
            alt="Professional Services"
            class="solution-item__image"
        >

        <div class="solution-item__overlay"></div>

        <span>07</span>

        <div>
            <h3>
                Professional Services
            </h3>

            <p>
                Expertise, consulting and professional
                services supporting sustainability
                transformation.
            </p>
        </div>

        <strong>↗</strong>

    </article>


</div>

    </div>

</section>

    <!-- =====================================================
         NETWORKING
    ====================================================== -->

    <section class="exhibition-networking section section--light">

        <div class="container">

            <div class="exhibition-networking__grid">

                <div class="section-index">
                    04
                </div>


                <div>

                    <p class="eyebrow eyebrow--dark">
                        INDUSTRY NETWORKING
                    </p>

                    <h2>
                        FIND THE
                        <span>RIGHT</span>
                        CONNECTION.
                    </h2>

                </div>


                <div class="exhibition-networking__copy">

                    <p class="exhibition-networking__lead">
                        One exhibition floor.
                        Multiple perspectives.
                        Meaningful connections.
                    </p>

                    <p>
                        The exhibition is designed to support
                        interaction between solution providers,
                        businesses, professionals, government,
                        academia and other stakeholders.
                    </p>


                    <div class="networking-tags">

                        <span>BUSINESS</span>
                        <span>GOVERNMENT</span>
                        <span>ACADEMIA</span>
                        <span>FINANCE</span>
                        <span>PROFESSIONALS</span>
                        <span>INTERNATIONAL</span>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         BOOTH SCALE
    ====================================================== -->

    <section class="exhibition-scale section section--dark">

        <div class="container">

            <div class="exhibition-scale__grid">


                <div class="exhibition-scale__number">

                    <span class="eyebrow">
                        TARGET
                    </span>

                    <strong>
                        20
                    </strong>

                    <span class="exhibition-scale__label">
                        EXHIBITION<br>
                        BOOTHS
                    </span>

                </div>


                <div class="exhibition-scale__content">

                    <p class="eyebrow">
                        THE EXHIBITION FLOOR
                    </p>

                    <h2>
                        SPACE FOR
                        <span>IDEAS.</span>
                    </h2>

                    <p>
                        Approximately 20 standard exhibition booths
                        are proposed for sustainability-related
                        organisations and solution providers.
                    </p>

                </div>


            </div>

        </div>

    </section>



    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="inner-cta section section--light">

        <div class="container">

            <p class="eyebrow eyebrow--dark">
                EXHIBITION + INDUSTRY ENGAGEMENT
            </p>

            <h2>
                BRING THE
                <span>SOLUTION.</span>
            </h2>

            <a href="{{ route('register') }}" class="button button--dark">
                Join SUSTAIN 2026
                <span>↗</span>
            </a>

        </div>

    </section>


</main>
@endsection
