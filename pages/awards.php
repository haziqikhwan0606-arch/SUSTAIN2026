<?php

$pageTitle = 'Impact Awards — SUSTAIN 2026';
$basePath  = '../';
$logoFile = 'logo/logo.awards.png';
require_once '../includes/header.php';

?>

<main class="inner-page awards-page">


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="awards-hero">

        <!-- BACKGROUND VIDEO -->
        <video
            class="awards-hero__video"
            autoplay
            muted
            loop
            playsinline
        >
            <source src="../assets/videos/awards.mp4" type="video/mp4">
        </video>

        <!-- VIDEO OVERLAY -->
        <div class="awards-hero__overlay"></div>


        <div class="container">

            <div class="awards-hero__top">
                <span></span>
                <span>IMPACT AWARDS</span>
            </div>


            <div class="awards-hero__content">

                <p class="eyebrow">
                    SUSTAIN 2026 IMPACT AWARDS
                </p>

                <h1>
                    RECOGNISE
                    <span>THE</span>
                    <br>
                    IMPACT.
                </h1>

                <p>
                    Recognising organisations and individuals that are turning sustainability commitments into meaningful action, measurable outcomes and lasting impact[cite: 1].
                </p>

                <div style="margin-top: 30px;">
                    <a href="#nomination-section" class="button button--lime">
                        Submit Nomination
                        <span>↗</span>
                    </a>
                </div>

            </div>


            <div class="awards-hero__bottom">
                <span>LEADERSHIP · INNOVATION · IMPACT</span>
                <span>SUSTAIN 2026</span>
            </div>

        </div>

    </section>



    <!-- =====================================================
         INTRO / WHAT WE RECOGNISE (SOFTER BACKGROUND)
    ====================================================== -->

    <section class="awards-intro section section--dark" style="background: linear-gradient(135deg, #17241b 0%, #1e3023 100%); padding: 100px 0; position: relative; overflow: hidden;">

        <div class="container" style="position: relative; z-index: 2;">

            <!-- HEADER TITLE -->
            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 60px; flex-wrap: wrap; gap: 30px;">
                <div>
                    <span style="color: #a3e635; font-size: 13px; font-weight: 800; letter-spacing: 3px; display: block; margin-bottom: 12px;">
                        01 / SCOPE OF RECOGNITION
                    </span>
                    <h2 style="font-size: clamp(32px, 4vw, 48px); color: #ffffff; line-height: 1.15; font-weight: 800; margin: 0;">
                        WHAT WE
                        <span style="color: #a3e635;">RECOGNISE</span>
                        <br>& WHO CAN JOIN.
                    </h2>
                </div>

                <div style="max-width: 450px;">
                    <p style="color: rgba(255,255,255,0.85); font-size: 15px; line-height: 1.6; margin: 0;">
                        We celebrate individuals, organisations, and initiatives contributing to a more sustainable, responsible, and resilient future[cite: 1].
                    </p>
                </div>
            </div>


            <!-- 3 STYLISH CARDS GRID (ENVIRONMENTAL, SOCIAL, GOVERNANCE) -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-bottom: 40px;">

                <!-- CARD 01: ENVIRONMENTAL -->
                <div style="background: rgba(255, 255, 255, 0.06); border: 1px solid rgba(163, 230, 53, 0.25); border-radius: 20px; padding: 35px; backdrop-filter: blur(10px); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'" onmouseout="this.style.transform='translateY(0)'">
                    <span style="color: #a3e635; font-size: 24px; font-weight: 900; display: block; margin-bottom: 15px;">01</span>
                    <h3 style="color: #fff; font-size: 20px; font-weight: 700; margin-bottom: 15px; letter-spacing: 0.5px;">ENVIRONMENTAL IMPACT</h3>
                    <p style="color: rgba(255,255,255,0.8); font-size: 14px; line-height: 1.6; margin: 0;">
                        Climate action • Energy • Carbon • Waste • Water • Circular Economy • Biodiversity[cite: 1]
                    </p>
                </div>

                <!-- CARD 02: SOCIAL -->
                <div style="background: rgba(255, 255, 255, 0.06); border: 1px solid rgba(163, 230, 53, 0.25); border-radius: 20px; padding: 35px; backdrop-filter: blur(10px); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'" onmouseout="this.style.transform='translateY(0)'">
                    <span style="color: #a3e635; font-size: 24px; font-weight: 900; display: block; margin-bottom: 15px;">02</span>
                    <h3 style="color: #fff; font-size: 20px; font-weight: 700; margin-bottom: 15px; letter-spacing: 0.5px;">SOCIAL IMPACT</h3>
                    <p style="color: rgba(255,255,255,0.8); font-size: 14px; line-height: 1.6; margin: 0;">
                        People • Workplace • Skills • Inclusion • Community • Social Innovation[cite: 1]
                    </p>
                </div>

                <!-- CARD 03: GOVERNANCE -->
                <div style="background: rgba(255, 255, 255, 0.06); border: 1px solid rgba(163, 230, 53, 0.25); border-radius: 20px; padding: 35px; backdrop-filter: blur(10px); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'" onmouseout="this.style.transform='translateY(0)'">
                    <span style="color: #a3e635; font-size: 24px; font-weight: 900; display: block; margin-bottom: 15px;">03</span>
                    <h3 style="color: #fff; font-size: 20px; font-weight: 700; margin-bottom: 15px; letter-spacing: 0.5px;">GOVERNANCE & RESPONSIBLE BUSINESS</h3>
                    <p style="color: rgba(255,255,255,0.8); font-size: 14px; line-height: 1.6; margin: 0;">
                        ESG • Ethics • Transparency • Reporting • Governance • Responsible Growth[cite: 1]
                    </p>
                </div>

            </div>


            <!-- WHO CAN BE NOMINATED BAR -->
            <div style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(163, 230, 53, 0.3); border-radius: 16px; padding: 30px 40px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                <div>
                    <h4 style="color: #a3e635; font-size: 13px; font-weight: 800; letter-spacing: 2px; margin-bottom: 6px;">WHO CAN BE NOMINATED?</h4>
                    <p style="color: #fff; font-size: 14px; margin: 0;">
                        <strong>Corporate:</strong> Corporations • SMEs • Start-ups • GLCs • Social Enterprises • NGOs • Institutions[cite: 1]
                    </p>
                </div>
                <div style="border-left: 1px solid rgba(255,255,255,0.15); padding-left: 20px;">
                    <p style="color: #fff; font-size: 14px; margin: 0;">
                        <strong>Individuals:</strong> Business Leaders • ESG Professionals • Entrepreneurs • Researchers • Sustainability Practitioners[cite: 1]
                    </p>
                </div>
            </div>

        </div>

    </section>


    <!-- =====================================================
         AWARD AREAS (9 WAYS)
    ====================================================== -->

    <section class="awards-categories section section--dark">

        <div class="container">

            <div class="awards-heading">

                <div class="section-index section-index--light">
                    02
                </div>

                <div>

                    <p class="eyebrow">
                        AREAS OF RECOGNITION
                    </p>

                    <h2>
                        NINE
                        <span>WAYS</span>
                        TO CREATE IMPACT.
                    </h2>

                </div>

            </div>


            <div class="award-list">

                <article class="award-item">
                    <span class="award-item__number">01</span>
                    <div class="award-item__content">
                        <h3>Sustainability Leadership</h3>
                        <p>Recognising leadership that drives meaningful sustainability transformation.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

                <article class="award-item">
                    <span class="award-item__number">02</span>
                    <div class="award-item__content">
                        <h3>ESG Implementation</h3>
                        <p>Recognising organisations turning ESG principles into meaningful action.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

                <article class="award-item">
                    <span class="award-item__number">03</span>
                    <div class="award-item__content">
                        <h3>Green Innovation</h3>
                        <p>Celebrating innovative ideas and solutions creating positive environmental impact.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

                <article class="award-item">
                    <span class="award-item__number">04</span>
                    <div class="award-item__content">
                        <h3>Carbon Reduction</h3>
                        <p>Recognising measurable efforts to reduce emissions and accelerate decarbonisation.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

                <article class="award-item">
                    <span class="award-item__number">05</span>
                    <div class="award-item__content">
                        <h3>Sustainable Business</h3>
                        <p>Celebrating businesses embedding sustainability into strategy, operations and growth.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

                <article class="award-item">
                    <span class="award-item__number">06</span>
                    <div class="award-item__content">
                        <h3>Sustainable Infrastructure</h3>
                        <p>Recognising infrastructure designed to support resilient and sustainable communities.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

                <article class="award-item">
                    <span class="award-item__number">07</span>
                    <div class="award-item__content">
                        <h3>Sustainable Finance</h3>
                        <p>Highlighting financial approaches that support responsible and sustainable development.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

                <article class="award-item">
                    <span class="award-item__number">08</span>
                    <div class="award-item__content">
                        <h3>Community Impact</h3>
                        <p>Celebrating initiatives creating meaningful social and community outcomes.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

                <article class="award-item">
                    <span class="award-item__number">09</span>
                    <div class="award-item__content">
                        <h3>Industry Transformation</h3>
                        <p>Recognising initiatives reshaping industries towards a more sustainable future.</p>
                    </div>
                    <span class="award-item__arrow">↗</span>
                </article>

            </div>

        </div>

    </section>



    <!-- =====================================================
         AWARD CATEGORIES & LISTING (30 CORPORATE, 20 INDIVIDUAL, 15 HONOURS)
    ====================================================== -->

    <section class="awards-listing section section--grey">

        <div class="container">

            <div class="awards-heading" style="margin-bottom: 50px;">
                <div class="section-index">03</div>
                <div>
                    <p class="eyebrow eyebrow--dark">AWARD CATEGORIES</p>
                    <h2>THE <span>COMPLETE</span> LISTING.</h2>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                
                <!-- 30 CORPORATE AWARDS -->
                <div style="background: #fff; padding: 35px; border-radius: 16px; border: 1px solid rgba(0,0,0,0.08);">
                    <span style="color: #2e4d35; font-size: 13px; font-weight: 800; letter-spacing: 2px; display: block; margin-bottom: 10px;">TIER 01</span>
                    <h3 style="font-size: 22px; color: #1a271e; margin-bottom: 20px;">30 Corporate Awards</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #444; display: flex; flex-direction: column; gap: 8px;">
                        <li>• SUSTAIN 2026 Sustainable Business of the Year[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Transformation Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Business Transformation Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Green Innovation Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Climate Action Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Carbon Management Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Net Zero Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Finance Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Reporting Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Data & Transparency Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Circular Economy Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Renewable Energy Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Green Technology Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Manufacturing Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Infrastructure Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Built Environment Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Facility Management Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Supply Chain Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Responsible Business Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Social Impact Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Community Sustainability Impact Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 SME Sustainability Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Innovation Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Industry Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Governance Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Intelligence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Global Sustainability Enterprise Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Impact Company of the Year[cite: 1]</li>
                    </ul>
                </div>

                <!-- 20 INDIVIDUAL AWARDS -->
                <div style="background: #fff; padding: 35px; border-radius: 16px; border: 1px solid rgba(0,0,0,0.08);">
                    <span style="color: #2e4d35; font-size: 13px; font-weight: 800; letter-spacing: 2px; display: block; margin-bottom: 10px;">TIER 02</span>
                    <h3 style="font-size: 22px; color: #1a271e; margin-bottom: 20px;">20 Individual Awards</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #444; display: flex; flex-direction: column; gap: 8px;">
                        <li>• SUSTAIN 2026 Sustainability Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Visionary Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Green Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Climate Action Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Transformation Leader Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Champion Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Innovation Leader Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Finance Leader Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Carbon & Climate Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Reporting Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Professional Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Educator & Knowledge Leader Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Research Excellence Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Green Technology Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Built Environment Leader Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainable Facility & Asset Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Changemaker Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Lifetime Contribution to Sustainability Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Global Sustainability Icon Award[cite: 1]</li>
                    </ul>
                </div>

                <!-- 15 PREMIUM SPECIAL HONOURS -->
                <div style="background: #fff; padding: 35px; border-radius: 16px; border: 1px solid rgba(0,0,0,0.08);">
                    <span style="color: #2e4d35; font-size: 13px; font-weight: 800; letter-spacing: 2px; display: block; margin-bottom: 10px;">TIER 03</span>
                    <h3 style="font-size: 22px; color: #1a271e; margin-bottom: 20px;">15 Premium Special Honours</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #444; display: flex; flex-direction: column; gap: 8px;">
                        <li>• SUSTAIN 2026 Grand Sustainability Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Global Sustainability Leadership Honour[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Visionary Honour[cite: 1]</li>
                        <li>• SUSTAIN 2026 Lifetime Sustainability Achievement Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Outstanding Contribution to Sustainability Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Legacy Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Excellence Grand Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Global Sustainability Champion Honour[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Transformation Honour[cite: 1]</li>
                        <li>• SUSTAIN 2026 Distinguished Sustainability Leadership Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Pioneer Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Sustainability Icon Honour[cite: 1]</li>
                        <li>• SUSTAIN 2026 ESG Leadership Grand Honour[cite: 1]</li>
                        <li>• SUSTAIN 2026 Distinguished Contribution to ESG Award[cite: 1]</li>
                        <li>• SUSTAIN 2026 Global Impact Sustainability Award[cite: 1]</li>
                    </ul>
                </div>

            </div>

        </div>

    </section>



   <!-- =====================================================
         WHY NOMINATE? (WITH BACKGROUND IMAGE)
    ====================================================== -->

    <section class="awards-philosophy section section--dark" style="padding: 120px 0; position: relative; overflow: hidden; background: #0f1711;">

        <!-- IMAGES LATAR BELAKANG & OVERLAY -->
        <img src="../assets/images/exhibition/6.jpg" alt="Why Nominate Background" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(13, 20, 16, 0.92) 0%, rgba(22, 34, 25, 0.88) 100%); z-index: 1;"></div>

        <div class="container" style="position: relative; z-index: 2;">

            <div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 60px; align-items: center;">

                <!-- LEFT SIDE: TITLE -->
                <div>
                    <div style="color: #a3e635; font-size: 14px; font-weight: 800; letter-spacing: 3px; margin-bottom: 15px;">
                        04 / BENEFITS
                    </div>

                    <h2 style="font-size: clamp(36px, 4vw, 52px); color: #ffffff; line-height: 1.15; font-weight: 800; margin: 0;">
                        WHY
                        <br>
                        <span style="color: #a3e635;">NOMINATE?</span>
                    </h2>
                </div>


                <!-- RIGHT SIDE: CARDS GRID -->
                <div style="display: flex; flex-direction: column; gap: 15px;">

                    <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); padding: 22px 25px; border-radius: 14px; display: flex; align-items: flex-start; gap: 20px; backdrop-filter: blur(8px);">
                        <span style="color: #a3e635; font-weight: 800; font-size: 16px;">01</span>
                        <div>
                            <strong style="color: #fff; display: block; font-size: 16px; margin-bottom: 4px; letter-spacing: 0.5px;">RECOGNITION</strong>
                            <p style="color: rgba(255,255,255,0.75); font-size: 14px; margin: 0; line-height: 1.5;">Showcase your sustainability achievements[cite: 1].</p>
                        </div>
                    </div>

                    <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); padding: 22px 25px; border-radius: 14px; display: flex; align-items: flex-start; gap: 20px; backdrop-filter: blur(8px);">
                        <span style="color: #a3e635; font-weight: 800; font-size: 16px;">02</span>
                        <div>
                            <strong style="color: #fff; display: block; font-size: 16px; margin-bottom: 4px; letter-spacing: 0.5px;">VISIBILITY</strong>
                            <p style="color: rgba(255,255,255,0.75); font-size: 14px; margin: 0; line-height: 1.5;">Put your organisation or leadership in the spotlight[cite: 1].</p>
                        </div>
                    </div>

                    <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); padding: 22px 25px; border-radius: 14px; display: flex; align-items: flex-start; gap: 20px; backdrop-filter: blur(8px);">
                        <span style="color: #a3e635; font-weight: 800; font-size: 16px;">03</span>
                        <div>
                            <strong style="color: #fff; display: block; font-size: 16px; margin-bottom: 4px; letter-spacing: 0.5px;">CREDIBILITY</strong>
                            <p style="color: rgba(255,255,255,0.75); font-size: 14px; margin: 0; line-height: 1.5;">Demonstrate your commitment to responsible and sustainable business[cite: 1].</p>
                        </div>
                    </div>

                    <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); padding: 22px 25px; border-radius: 14px; display: flex; align-items: flex-start; gap: 20px; backdrop-filter: blur(8px);">
                        <span style="color: #a3e635; font-weight: 800; font-size: 16px;">04</span>
                        <div>
                            <strong style="color: #fff; display: block; font-size: 16px; margin-bottom: 4px; letter-spacing: 0.5px;">CONNECTIONS</strong>
                            <p style="color: rgba(255,255,255,0.75); font-size: 14px; margin: 0; line-height: 1.5;">Engage with business, government, finance and sustainability leaders[cite: 1].</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         AWARD INFORMATION & NOMINATION PROCESS (FROM ACTION TO IMPACT)
    ====================================================== -->

    <section id="nomination-section" class="awards-next section section--light">

        <div class="container">

            <div class="awards-next__inner" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">

                <div>
                    <p class="eyebrow eyebrow--dark">
                        FROM ACTION TO IMPACT
                    </p>

                    <h2>
                        NOMINATE
                        <span>YOUR JOURNEY.</span>
                    </h2>

                    <p style="margin-top: 20px; color: #555; line-height: 1.6;">
                        Your sustainability journey deserves to be seen. Make your impact count.
                    </p>

                    <div style="margin-top: 30px; display: flex; gap: 15px; flex-wrap: wrap;">
                        <a href="register.php" class="button button--dark">
                            Submit Your Nomination <span>↗</span>
                        </a>
                        <a href="#guidelines" class="button" style="background: transparent; border: 1px solid #1a271e; color: #1a271e;">
                            View Award Guidelines <span>↗</span>
                        </a>
                    </div>
                </div>


                <div class="awards-next__copy" style="background: rgba(0,0,0,0.03); padding: 35px; border-radius: 16px; border: 1px solid rgba(0,0,0,0.08);">
                    <span style="font-size: 12px; font-weight: 800; color: #2e4d35; letter-spacing: 2px; display: block; margin-bottom: 10px;">EVALUATION PATHWAY</span>
                    <h3 style="font-size: 20px; color: #1a271e; margin-bottom: 20px;">NOMINATE → ASSESS → RECOGNISE → INSPIRE</h3>
                    <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 0;">
                        The evaluation framework is designed to ensure transparency, fairness, and rigorous standards across all corporate, individual, and special recognition tiers.
                    </p>
                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="inner-cta section section--dark" style="text-align: center;">

        <div class="container" style="display: flex; flex-direction: column; align-items: center;">

            <p class="eyebrow">
                SUSTAIN 2026 IMPACT AWARDS
            </p>

            <h2 style="margin: 20px 0 30px 0;">
                RECOGNISING ACTION.
                <br>
                <span>CELEBRATING IMPACT.</span>
                <br>
                INSPIRING THE FUTURE.
            </h2>

            <a href="register.php" class="button button--lime">
                Join SUSTAIN 2026
                <span>↗</span>
            </a>

        </div>

    </section>


</main>


<?php require_once '../includes/footer.php'; ?>