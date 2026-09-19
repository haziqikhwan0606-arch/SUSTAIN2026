@extends('layouts.app')

@php
    $pageTitle = 'Conference Tracks — SUSTAIN 2026';
@endphp

@section('content')
<main class="inner-page tracks-page">


    <!-- =====================================================
         PAGE HERO
    ====================================================== -->

    <section
    class="inner-hero inner-hero--dark tracks-hero"
>

    <video
        class="inner-hero__video"
        autoplay
        muted
        loop
        playsinline
    >
        <source src="/assets/videos/tracks.mp4" type="video/mp4">
    </video>

    <div class="inner-hero__overlay"></div>


    <div class="inner-hero__meta">

        <span>
            02 / CONFERENCE TRACKS
        </span>

        <span>
            10 NOVEMBER 2026
        </span>

    </div>


    <div class="inner-hero__content">

        <p class="eyebrow">
            THE PROGRAMME
        </p>

        <h1>
            FOUR
            <span>QUESTIONS.</span>
            ONE
            <span>TRANSITION.</span>
        </h1>

        <p class="inner-hero__description">
            From national policy to business action,
            credible reporting and sustainable finance.
        </p>

    </div>


    <div class="inner-hero__footer">

        <span>
            SUSTAIN 2026
        </span>

        <span>
            BANGI AVENUE CONVENTION CENTRE · MALAYSIA
        </span>

    </div>

</section>



    <!-- =====================================================
         INTRO
    ====================================================== -->

    <section class="tracks-intro section section--light">

        <div class="container">

            <div class="tracks-intro__grid">

                <div class="section-index">
                    01
                </div>


                <div class="tracks-intro__heading">

                    <p class="eyebrow eyebrow--dark">
                        THE FOUR-TRACK PROGRAMME
                    </p>

                    <h2>
                        Sustainability is no longer
                        a conversation.
                        <span>It needs a system.</span>
                    </h2>

                </div>


                <div class="tracks-intro__copy">

                    <p>
                        SUSTAIN 2026 brings together four
                        interconnected perspectives on the
                        sustainability transition.
                    </p>

                    <p>
                        Understand the direction. Implement
                        change. Build credible information.
                        Connect sustainability with finance.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         TRACK 01
    ====================================================== -->

  <section class="track-section track-section--dark track-section--interactive">
    <div class="container">

        <!-- TRACK HEADER -->
        <div class="track-section__header">

            <div class="track-number">01</div>

            <div>
                <span class="track-label">TRACK 01</span>

                <p class="eyebrow">
                    GOVERNMENT · INDUSTRY · NATIONAL TRANSFORMATION
                </p>

                <h2>
                    POLICY <span>→</span> ACTION
                </h2>
            </div>

        </div>


        <!-- TRACK CONTENT -->
        <div class="track-section__grid">

            <!-- LEFT: TRACK TITLE -->
            <div class="track-section__title">

                <span class="track-tag">TRACK 01</span>

                <h3>
                    Government, Industry
                    & National Sustainability
                    Transformation
                </h3>

            </div>


            <!-- RIGHT: TRACK DETAILS -->
            <div class="track-section__content">

                <h4>
                    Malaysia's Sustainability Transition:
                    Policy, Industry, Energy & Infrastructure
                </h4>

                <p class="track-theme">
                    “From National Policy to Industry Action:
                    Building Malaysia's Competitive Green Economy”
                </p>


                <!-- =========================================
                     INTERACTIVE FOCUS AREAS
                ========================================== -->

                <div class="track-focus track-focus--interactive">

                    <!-- FOCUS HEADER -->
                    <div class="track-focus__heading">
                        <span>THE FOCUS</span>
                        <small>10 AREAS</small>
                    </div>


                    <div class="track-focus__interactive">

                        <!-- =================================
                             LEFT — AREA LIST
                        ================================== -->

                        <div class="track-focus__list">


                            <!-- 01 -->
                            <div
                                class="track-focus__item is-active"
                                data-number="01"
                                data-display="SUSTAINABILITY<br>& ENERGY<br>TRANSITION"
                                data-keywords="SUSTAINABILITY · ENERGY · TRANSITION"
                            >
                                <span>01</span>

                                <p>
                                    Malaysia's sustainability
                                    and energy transition
                                </p>
                            </div>


                            <!-- 02 -->
                            <div
                                class="track-focus__item"
                                data-number="02"
                                data-display="NATIONAL ESG<br>& CLIMATE<br>DIRECTION"
                                data-keywords="ESG · CLIMATE · DIRECTION"
                            >
                                <span>02</span>

                                <p>
                                    National ESG and climate direction
                                </p>
                            </div>


                            <!-- 03 -->
                            <div
                                class="track-focus__item"
                                data-number="03"
                                data-display="GREEN INVESTMENT<br>& INDUSTRIAL<br>TRANSFORMATION"
                                data-keywords="INVESTMENT · INDUSTRY · TRANSFORMATION"
                            >
                                <span>03</span>

                                <p>
                                    Green investment and industrial transformation
                                </p>
                            </div>


                            <!-- 04 -->
                            <div
                                class="track-focus__item"
                                data-number="04"
                                data-display="SUSTAINABLE<br>CONSTRUCTION &<br>INFRASTRUCTURE"
                                data-keywords="CONSTRUCTION · INFRASTRUCTURE · SUSTAINABILITY"
                            >
                                <span>04</span>

                                <p>
                                    Sustainable construction and infrastructure
                                </p>
                            </div>


                            <!-- 05 -->
                            <div
                                class="track-focus__item"
                                data-number="05"
                                data-display="GREEN<br>TECHNOLOGY"
                                data-keywords="GREEN · TECHNOLOGY"
                            >
                                <span>05</span>

                                <p>
                                    Green technology
                                </p>
                            </div>


                            <!-- 06 -->
                            <div
                                class="track-focus__item"
                                data-number="06"
                                data-display="ENERGY<br>EFFICIENCY &<br>RENEWABLE ENERGY"
                                data-keywords="ENERGY · EFFICIENCY · RENEWABLE"
                            >
                                <span>06</span>

                                <p>
                                    Energy efficiency and renewable energy
                                </p>
                            </div>


                            <!-- 07 -->
                            <div
                                class="track-focus__item"
                                data-number="07"
                                data-display="INDUSTRY<br>READINESS"
                                data-keywords="INDUSTRY · READINESS"
                            >
                                <span>07</span>

                                <p>
                                    Industry readiness
                                </p>
                            </div>


                            <!-- 08 -->
                            <div
                                class="track-focus__item"
                                data-number="08"
                                data-display="GOVERNMENT<br>INCENTIVES &<br>SUPPORT"
                                data-keywords="GOVERNMENT · INCENTIVES · SUPPORT"
                            >
                                <span>08</span>

                                <p>
                                    Government incentives and support
                                </p>
                            </div>


                            <!-- 09 -->
                            <div
                                class="track-focus__item"
                                data-number="09"
                                data-display="OPPORTUNITIES<br>FOR MALAYSIAN<br>BUSINESSES"
                                data-keywords="BUSINESS · OPPORTUNITIES · MALAYSIA"
                            >
                                <span>09</span>

                                <p>
                                    Opportunities for Malaysian businesses
                                </p>
                            </div>


                            <!-- 10 -->
                            <div
                                class="track-focus__item"
                                data-number="10"
                                data-display="MALAYSIA AS A<br>REGIONAL GREEN<br>ECONOMY HUB"
                                data-keywords="MALAYSIA · REGIONAL · GREEN ECONOMY"
                            >
                                <span>10</span>

                                <p>
                                    Malaysia as a regional green economy hub
                                </p>
                            </div>


                        </div>


                        <!-- =================================
                             RIGHT — CHANGING DISPLAY
                        ================================== -->

                        <div 
    class="track-focus__display"
    style="
        background-image:
            linear-gradient(
                rgba(10, 12, 11, .55),
                rgba(10, 12, 11, .75)
            ),
            url('/assets/images/tracks/01.jpg');
    "
>

    <div class="track-focus__display-number">
        01
    </div>

    <h5>
        SUSTAINABILITY
        <br>
        & ENERGY
        <br>
        TRANSITION
    </h5>

    <div class="track-focus__display-line"></div>

    <p class="track-focus__display-keywords">
        SUSTAINABILITY · ENERGY · TRANSITION
    </p>

</div>

                    </div>

                </div>


                <!-- =========================================
                     KEY MESSAGE
                ========================================== -->

                <div class="track-message">

                    <span>KEY MESSAGE</span>

                    <p>
                        Sustainability is no longer only an
                        environmental agenda; it is becoming part
                        of Malaysia's industrial competitiveness,
                        investment and economic development.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>



    <!-- =====================================================
         TRACK 03
    ====================================================== -->

    <section class="track-section track-section--dark">

        <div class="container">

            <div class="track-section__header">

                <div class="track-number">
                    03
                </div>


                <div class="track-section__heading">

                    <span class="track-label">
                        TRACK 03
                    </span>

                    <p class="eyebrow">
                        DATA · DISCLOSURE · CREDIBILITY
                    </p>

                    <h2>
                        DATA
                        <span>→</span>
                        TRUST
                    </h2>

                </div>

            </div>


            <div class="track-section__grid">

                <div class="track-section__title">

                    <span class="track-section__label">
                        THE FOCUS
                    </span>

                    <h3>
                        ESG Disclosure,
                        Reporting & Credibility
                    </h3>

                </div>


                <div class="track-section__content">

                    <h4>
                        From Sustainability Performance
                        to Credible Disclosure
                    </h4>

                    <p class="track-description">
                        This track examines how organisations
                        can build reliable sustainability
                        information and strengthen the credibility
                        of ESG disclosure.
                    </p>


                    <div class="track-focus">

                        <div class="track-focus__heading">

                            <span>
                                FOCUS AREAS
                            </span>

                            <small>
                                08 AREAS
                            </small>

                        </div>


                        <ul>

                            <li>
                                Sustainability reporting
                            </li>

                            <li>
                                ESG disclosure
                            </li>

                            <li>
                                GRI Standards
                            </li>

                            <li>
                                IFRS / ISSB sustainability disclosure
                            </li>

                            <li>
                                ESG reporting technology
                            </li>

                            <li>
                                Data credibility
                            </li>

                            <li>
                                Traceability
                            </li>

                            <li>
                                Assurance readiness
                            </li>

                        </ul>

                    </div>


                    <div class="track-perspectives">

                        <span>
                            PLANNED PERSPECTIVES
                        </span>

                        <p>
                            GRI · IFRS/ISSB · Olympia Education
                            · WIED · ESGReports.my
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         TRACK 04
    ====================================================== -->

    <section class="track-section track-section--lime">

        <div class="container">

            <div class="track-section__header">

                <div class="track-number">
                    04
                </div>


                <div class="track-section__heading">

                    <span class="track-label">
                        TRACK 04
                    </span>

                    <p class="eyebrow eyebrow--dark">
                        FINANCE · INVESTMENT · TRANSITION
                    </p>

                    <h2>
                        SUSTAINABILITY
                        <span>→</span>
                        FINANCE
                    </h2>

                </div>

            </div>


            <div class="track-section__grid">

                <div class="track-section__title">

                    <span class="track-section__label">
                        THE FOCUS
                    </span>

                    <h3>
                        Financing the
                        Sustainable Transition
                    </h3>

                </div>


                <div class="track-section__content">

                    <h4>
                        Connecting Sustainability Performance
                        with Access to Finance
                    </h4>

                    <p class="track-description">
                        Sustainable transformation requires
                        investment. This track explores the
                        financing pathways available to organisations
                        pursuing sustainability.
                    </p>


                    <div class="track-focus">

                        <div class="track-focus__heading">

                            <span>
                                FOCUS AREAS
                            </span>

                            <small>
                                08 AREAS
                            </small>

                        </div>


                        <ul>

                            <li>
                                Green financing
                            </li>

                            <li>
                                Sustainable finance
                            </li>

                            <li>
                                Government grants
                            </li>

                            <li>
                                Matching grants
                            </li>

                            <li>
                                Bank loans
                            </li>

                            <li>
                                Investment incentives
                            </li>

                            <li>
                                SME financing
                            </li>

                            <li>
                                Sustainability-linked financing
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="inner-cta section section--dark">

        <div class="container">

            <p class="eyebrow">
                10 NOVEMBER 2026 · BACC · MALAYSIA
            </p>

            <h2>
                FIND YOUR
                <span>TRACK.</span>
            </h2>

            <a
                href="{{ route('register') }}"
                class="button button--lime"
            >
                Register for SUSTAIN 2026
                <span>↗</span>
            </a>

        </div>

    </section>

</main>
@endsection
