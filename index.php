<?php
/**
 * SUSTAIN 2026
 * Malaysia Sustainability & ESG Conference
 * Homepage
 */

$pageTitle = 'SUSTAIN 2026 â Malaysia Sustainability & ESG Conference';

require_once 'includes/header.php';
?>

<main class="site-main">

<!-- =====================================================
         HERO
    ====================================================== -->

    <section class="hero" id="home">

        <video
            class="hero__background"
            autoplay
            muted
            loop
            playsinline
        >
            <source src="assets/videos/hero.mp4" type="video/mp4">
        </video>

        <div class="hero__video-overlay"></div>

        <div class="hero__content" style="width: 100%; padding: 0 5%;">

            <!-- BARISAN ATAS -->
            <div class="hero__top-row">
                <!-- Bulatan Biru Kiri Atas -->
                <span class="hero-text-blue" style="flex: 1; text-align: left;">
                    From Sustainability Commitment
                </span>
                
                <!-- Bulatan Merah Atas (Date) -->
                <span class="hero-text-red" style="flex: 1; text-align: center;">
                    10 NOVEMBER 2026
                </span>
                
                <!-- Bulatan Biru Kanan Atas -->
                <span class="hero-text-blue" style="flex: 1; text-align: right;">
                    To Measurable Business Action
                </span>
            </div>

            <!-- TAJUK UTAMA -->
            <div class="hero__title">
                <span class="hero__title-small">SUSTAIN</span>
                <span class="hero__title-year">2026</span>
            </div>

            <!-- Bulatan Merah Bawah (Location) -->
            <div class="hero__location">
                BACC · MALAYSIA
            </div>

            <!-- BARISAN BAWAH -->
            <div class="hero__bottom" style="display: flex; justify-content: space-between; align-items: flex-end; width: 100%; padding-bottom: 40px;">

                <div class="hero__description">
                    <!-- Bulatan Biru Bawah Kiri -->
                    <span class="eyebrow-bottom">Malaysia's Platform For</span>
                    <p>
                        Sustainability, ESG
                        <br>
                        &amp; Business Transformation
                    </p>
                </div>

                <a href="pages/register.php" class="btn btn--primary">
                    Register Now
                    <span>↗</span>
                </a>

            </div>
        </div>

        <div class="hero__scroll">
            <span>SCROLL TO EXPLORE</span>
            <span class="hero__scroll-line"></span>
        </div>

    </section>


    <!-- =====================================================
         SESSION HIGHLIGHT: 2 SESSIONS SIDE-BY-SIDE
    ====================================================== -->

<section class="session-highlight section">

    <div class="container">

        <div class="session-highlight__grid-two" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">

            <!-- KAD SESI 01 -->
            <div class="session-highlight__card session-highlight__card--compact" style="background: #ffffff; border: 1px solid rgba(132, 204, 22, 0.5); border-radius: 24px; padding: 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);">
                
                <!-- Header Sesi -->
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <span style="font-size: 36px; font-weight: 800; color: #f97316; line-height: 1;">01</span>
                        <span style="font-size: 10px; font-weight: 700; letter-spacing: 1.2px; color: #65a30d; text-transform: uppercase;">SESSION</span>
                    </div>
                    <h3 style="font-size: 18px; font-weight: 700; color: #111813; margin: 0 0 20px 0; line-height: 1.3;">
                        BUILDING A HEALTHCARE NATION
                    </h3>
                </div>

                <!-- Peranan Ringkas -->
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div style="background: #fdfbf7; border: 1px solid rgba(249, 115, 22, 0.15); border-radius: 12px; padding: 12px; display: flex; align-items: center; gap: 12px;">
                        <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(132, 204, 22, 0.15); border: 1px solid rgba(132, 204, 22, 0.3); flex-shrink: 0;"></div>
                        <div>
                            <span style="display: block; font-size: 9px; font-weight: 800; color: #f97316; text-transform: uppercase; margin-bottom: 2px;">KEYNOTE</span>
                            <h4 style="font-size: 13px; font-weight: 600; color: #111813; margin: 0;">To Be Announced</h4>
                        </div>
                    </div>

                    <div style="background: #fdfbf7; border: 1px solid rgba(249, 115, 22, 0.15); border-radius: 12px; padding: 12px; display: flex; align-items: center; gap: 12px;">
                        <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(132, 204, 22, 0.15); border: 1px solid rgba(132, 204, 22, 0.3); flex-shrink: 0;"></div>
                        <div>
                            <span style="display: block; font-size: 9px; font-weight: 800; color: #f97316; text-transform: uppercase; margin-bottom: 2px;">MODERATOR</span>
                            <h4 style="font-size: 13px; font-weight: 600; color: #111813; margin: 0;">Tuan Ir Ts Dr Mohamad Hairil</h4>
                        </div>
                    </div>
                </div>

            </div>


            <!-- KAD SESI 02 -->
            <div class="session-highlight__card session-highlight__card--compact" style="background: #ffffff; border: 1px solid rgba(132, 204, 22, 0.5); border-radius: 24px; padding: 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);">
                
                <!-- Header Sesi -->
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <span style="font-size: 36px; font-weight: 800; color: #f97316; line-height: 1;">02</span>
                        <span style="font-size: 10px; font-weight: 700; letter-spacing: 1.2px; color: #65a30d; text-transform: uppercase;">SESSION</span>
                    </div>
                    <h3 style="font-size: 18px; font-weight: 700; color: #111813; margin: 0 0 20px 0; line-height: 1.3;">
                        GREEN FINANCE &amp; ESG INVESTMENT
                    </h3>
                </div>

                <!-- Peranan Ringkas -->
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div style="background: #fdfbf7; border: 1px solid rgba(249, 115, 22, 0.15); border-radius: 12px; padding: 12px; display: flex; align-items: center; gap: 12px;">
                        <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(132, 204, 22, 0.15); border: 1px solid rgba(132, 204, 22, 0.3); flex-shrink: 0;"></div>
                        <div>
                            <span style="display: block; font-size: 9px; font-weight: 800; color: #f97316; text-transform: uppercase; margin-bottom: 2px;">KEYNOTE</span>
                            <h4 style="font-size: 13px; font-weight: 600; color: #111813; margin: 0;">To Be Announced</h4>
                        </div>
                    </div>

                    <div style="background: #fdfbf7; border: 1px solid rgba(249, 115, 22, 0.15); border-radius: 12px; padding: 12px; display: flex; align-items: center; gap: 12px;">
                        <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(132, 204, 22, 0.15); border: 1px solid rgba(132, 204, 22, 0.3); flex-shrink: 0;"></div>
                        <div>
                            <span style="display: block; font-size: 9px; font-weight: 800; color: #f97316; text-transform: uppercase; margin-bottom: 2px;">MODERATOR</span>
                            <h4 style="font-size: 13px; font-weight: 600; color: #111813; margin: 0;">Prof. Dato' Dr. Nashrul</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- =====================================================
     CONFERENCE JOURNEY
====================================================== -->

<section class="journey section" id="journey">

    <div class="container">

        <div class="section-label">
            <span></span>
            <span>THE JOURNEY</span>
        </div>

        <div class="journey__intro">

            <div>
                <h2>
                    From policy
                    <br>
                    to <span>impact.</span>
                </h2>
            </div>

            <div class="journey__intro-right">

                <p>
                    SUSTAIN 2026 follows the sustainability
                    transformation journey — connecting policy,
                    implementation, disclosure, financing and
                    measurable impact.
                </p>

                <div class="journey__visual">
                    <img src="assets/images/conference.jpg" alt="SUSTAIN 2026 Conference" loading="lazy">
                </div>

            </div>

        </div>

    </div>


    <div class="journey__grid-wrap">

        <div class="journey__stages" id="journeySlider">

            <!-- 01 -->
            <article class="journey-stage">

                <img src="assets/images/journey/1.jpg" alt="Understand" class="journey-stage__img" loading="lazy">
                
                <span class="journey-stage__number">01</span>

                <div class="journey-stage__content">

                    <span class="journey-stage__label">
                        NATIONAL DIRECTION
                    </span>

                    <h3>UNDERSTAND</h3>

                    <p>
                        Understand the changing sustainability landscape, national direction, industry expectations and emerging ESG requirements.
                    </p>

                </div>

                <span class="journey-stage__arrow">↗</span>

            </article>


            <!-- 02 -->
            <article class="journey-stage">

                <img src="assets/images/journey/2.jpg" alt="Implement" class="journey-stage__img" loading="lazy">

                <span class="journey-stage__number">02</span>

                <div class="journey-stage__content">

                    <span class="journey-stage__label">
                        ORGANISATIONAL ACTION
                    </span>

                    <h3>IMPLEMENT</h3>

                    <p>
                        Explore how organisations can translate sustainability objectives into practical strategies, operational improvements and business transformation.
                    </p>

                </div>

                <span class="journey-stage__arrow">↗</span>

            </article>


            <!-- 03 -->
            <article class="journey-stage">

                <img src="assets/images/journey/3.jpg" alt="Report" class="journey-stage__img" loading="lazy">

                <span class="journey-stage__number">03</span>

                <div class="journey-stage__content">

                    <span class="journey-stage__label">
                        CREDIBLE INFORMATION
                    </span>

                    <h3>REPORT</h3>

                    <p>
                        Understand the growing importance of credible ESG data, sustainability disclosures, reporting frameworks, technology and transparency.
                    </p>

                </div>

                <span class="journey-stage__arrow">↗</span>

            </article>


            <!-- 04 -->
            <article class="journey-stage">

                <img src="assets/images/journey/4.jpg" alt="Finance" class="journey-stage__img" loading="lazy">

                <span class="journey-stage__number">04</span>

                <div class="journey-stage__content">

                    <span class="journey-stage__label">
                        CAPITAL & INVESTMENT
                    </span>

                    <h3>FINANCE</h3>

                    <p>
                        Discover how sustainability performance can connect businesses with green finance, grants, investment and new financial opportunities.
                    </p>

                </div>

                <span class="journey-stage__arrow">↗</span>

            </article>


            <!-- 05 -->
            <article class="journey-stage journey-stage--impact">

                <img src="assets/images/journey/5.jpg" alt="Transform" class="journey-stage__img" loading="lazy">

                <span class="journey-stage__number">05</span>

                <div class="journey-stage__content">

                    <span class="journey-stage__label">
                        MEASURABLE OUTCOMES
                    </span>

                    <h3>TRANSFORM</h3>

                    <p>
                        Move from compliance and reporting towards long-term competitiveness, resilience, innovation and sustainable growth.
                    </p>

                </div>

                <span class="journey-stage__arrow">↗</span>

            </article>

        </div>

    </div>

</section>

   <!-- =====================================================
         EXPERIENCE
    ====================================================== -->

    <section class="experience section" id="experience">

        <div class="container">

            <div class="section-label">
                <!-- Nomor bagian diperbaiki menjadi 03 -->
                <span></span>
                <span>THE EXPERIENCE</span>
            </div>


            <div class="experience__heading">

                <h2>
                    More than
                    <br>
                    a conference.
                </h2>

            </div>


            <div class="experience__grid">

                <!-- ACADEMIC SYMPOSIUM -->

                <a href="pages/symposium.php"
                   class="experience-card experience-card--symposium">

                    <span class="experience-card__number">
                        01
                    </span>

                    <div class="experience-card__content">

                        <span>ACADEMIC</span>

                        <h3>
                            Symposium
                            <br>
                            &amp; Paper Presentation
                        </h3>

                        <!-- Tagline resmi ditambahkan -->
                        <p style="font-size: 12px; margin-top: 10px; opacity: 0.85; letter-spacing: 0.5px;">
                            RESEARCH FOR IMPACT. IDEAS FOR THE FUTURE.
                        </p>

                        <span class="experience-card__arrow">
                            ↗
                        </span>

                    </div>

                </a>


                <!-- IMPACT AWARDS -->

                <a href="pages/awards.php"
                   class="experience-card experience-card--awards">

                    <span class="experience-card__number">
                        02
                    </span>

                    <div class="experience-card__content">

                        <span>RECOGNITION</span>

                        <h3>
                            SUSTAIN
                            <br>
                            Impact Awards
                        </h3>

                        <!-- Tagline resmi ditambahkan -->
                        <p style="font-size: 12px; margin-top: 10px; opacity: 0.85; letter-spacing: 0.5px;">
                            RECOGNISING ACTION. CELEBRATING IMPACT.
                        </p>

                        <span class="experience-card__arrow">
                            ↗
                        </span>

                    </div>

                </a>


                <!-- EXHIBITION -->

                <a href="pages/exhibition.php"
                   class="experience-card experience-card--exhibition">

                    <span class="experience-card__number">
                        03
                    </span>

                    <div class="experience-card__content">

                        <span>INDUSTRY</span>

                        <h3>
                            Exhibition
                            <br>
                            &amp; Networking
                        </h3>

                        <!-- Teks pendukung tambahan agar seimbang dengan kartu lainnya -->
                        <p style="font-size: 12px; margin-top: 10px; opacity: 0.85; letter-spacing: 0.5px;">
                            CONNECTING POLICY, INDUSTRY &amp; FINANCE.
                        </p>

                        <span class="experience-card__arrow">
                            ↗
                        </span>

                    </div>

                </a>

            </div>

        </div>

    </section>
   <!-- =====================================================
         SPEAKERS
    ====================================================== -->

    <section class="speakers section" id="speakers">

        <div class="container">

            <div class="section-label">
                <span></span>
                <span>SPEAKERS</span>
            </div>

            <div class="speakers__header">
                <h2>
                    Voices shaping
                    <br>
                    <span>the transition.</span>
                </h2>
                <a href="pages/speakers.php" class="text-link">
                    Meet all speakers
                    <span>&#8599;</span>
                </a>
            </div>

            <?php
            require_once 'includes/speakers_data.php';
            if (!empty($speakers)):
            ?>
            <div class="speaker-grid">
                <?php foreach (array_slice($speakers, 0, 4) as $idx => $sp): ?>
                <article class="speaker-card">
                    
                    <div class="speaker-card__image">
                        <!-- Pindahkan meta (number & category) ke atas gambar -->
                        <div class="speaker-card__meta">
                            <span class="speaker-card__number"><?= str_pad($idx+1, 2, '0', STR_PAD_LEFT) ?></span>
                            <?php if (!empty($sp['category'])): ?>
                                <span class="speaker-card__category"><?= htmlspecialchars($sp['category']) ?></span>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($sp['image'])): ?>
                            <img src="<?= htmlspecialchars($sp['image']) ?>"
                                 alt="<?= htmlspecialchars($sp['name']) ?>"
                                 loading="lazy">
                        <?php else: ?>
                            <div class="speaker-card__placeholder"><span>+</span></div>
                        <?php endif; ?>
                    </div>

                    <div class="speaker-card__content">
                        <h3>
                            <?php 
                            if (!empty($sp['title'])) echo htmlspecialchars($sp['title']).' '; 
                            echo htmlspecialchars($sp['name']); 
                            ?>
                        </h3>
                        
                        <div class="speaker-card__details">
                            <span class="speaker-card__position"><?= htmlspecialchars($sp['position']) ?></span>
                            <span class="speaker-card__org"><?= htmlspecialchars($sp['organisation']) ?></span>
                        </div>
                    </div>

                </article>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        </div>

    </section>

<!-- =====================================================
         IMPACT / SDGs
    ====================================================== -->

    <section class="impact section" id="impact">

        <div class="container">

            <div class="section-label">
                <span></span>
                <span>IMPACT</span>
            </div>


            <div class="impact__header">

                <h2>
                    Sustainability
                    <br>
                    <span>in action.</span>
                </h2>

                <p>
                    SUSTAIN 2026 aligns its conference programme
                    with selected United Nations Sustainable
                    Development Goals.
                </p>

            </div>


            <div class="sdg-list">

    <button
        type="button"
        class="sdg-item"
        data-sdg="04"
        data-title="Quality Education"
        data-description="Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all."
    >
        04
    </button>

    <button
        type="button"
        class="sdg-item"
        data-sdg="07"
        data-title="Affordable & Clean Energy"
        data-description="Ensure access to affordable, reliable, sustainable and modern energy for all."
    >
        07
    </button>

    <button
        type="button"
        class="sdg-item"
        data-sdg="08"
        data-title="Decent Work & Economic Growth"
        data-description="Promote sustained, inclusive and sustainable economic growth, productive employment and decent work."
    >
        08
    </button>

    <button
        type="button"
        class="sdg-item"
        data-sdg="09"
        data-title="Industry, Innovation & Infrastructure"
        data-description="Build resilient infrastructure, promote inclusive and sustainable industrialisation and foster innovation."
    >
        09
    </button>

    <button
        type="button"
        class="sdg-item"
        data-sdg="11"
        data-title="Sustainable Cities & Communities"
        data-description="Make cities and human settlements inclusive, safe, resilient and sustainable."
    >
        11
    </button>

    <button
        type="button"
        class="sdg-item"
        data-sdg="12"
        data-title="Responsible Consumption & Production"
        data-description="Ensure sustainable consumption and production patterns."
    >
        12
    </button>

    <button
        type="button"
        class="sdg-item"
        data-sdg="13"
        data-title="Climate Action"
        data-description="Take urgent action to combat climate change and its impacts."
    >
        13
    </button>

    <button
        type="button"
        class="sdg-item"
        data-sdg="16"
        data-title="Peace, Justice & Strong Institutions"
        data-description="Promote peaceful and inclusive societies, provide access to justice and build effective institutions."
    >
        16
    </button>

    <button
        type="button"
        class="sdg-item"
        data-sdg="17"
        data-title="Partnerships for the Goals"
        data-description="Strengthen the means of implementation and revitalise global partnerships for sustainable development."
    >
        17
    </button>

</div>


            <a href="pages/impact.php" class="text-link">
                Explore our impact
                <span>↗</span>
            </a>

        </div>

    </section>


    <!-- SDG information window -->
    <div class="sdg-overlay" id="sdgOverlay" aria-hidden="true"></div>

    <div class="sdg-modal"
         id="sdgModal"
         role="dialog"
         aria-modal="true"
         aria-labelledby="sdgModalTitle"
         hidden>

        <div class="sdg-modal__number" id="sdgModalNumber">
            
        </div>

        <span class="sdg-modal__label">
            SUSTAINABLE DEVELOPMENT GOAL
        </span>

        <h3 class="sdg-modal__title" id="sdgModalTitle">
            Quality Education
        </h3>

        <p class="sdg-modal__description" id="sdgModalDescription">
            Ensure inclusive and equitable quality education
            and promote lifelong learning opportunities for all.
        </p>

    </div>


    <!-- =====================================================
         GSED
    ====================================================== -->

    <section class="gsed section" id="gsed">

        <div class="container">

            <div class="section-label">
                <span>07</span>
                <span>GSED ECOSYSTEM</span>
            </div>


            <div class="gsed__header">

                <h2>
                    Beyond
                    <br>
                    <span>SUSTAIN 2026.</span>
                </h2>

                <p>
                    SUSTAIN 2026 sits within a wider sustainability
                    ecosystem connecting leadership, governance,
                    infrastructure, operations, carbon, ESG,
                    finance, education and innovation.
                </p>

            </div>


            <div class="gsed__institutes">

                <!-- CISE -->
                <a href="pages/gsed.php#cise" class="institute">
                    <div class="institute__image" style="background-image: url('assets/images/journey/1.jpg');"></div>
                    
                    <span>01</span>
                    <div>
                        <strong>CISE</strong>
                        <small>Sustainability Economy</small>
                    </div>
                    <span>↗</span>
                </a>

                <!-- CIBE -->
                <a href="pages/gsed.php#cibe" class="institute">
                    <div class="institute__image" style="background-image: url('assets/images/journey/2.jpg');"></div>
                    
                    <span>02</span>
                    <div>
                        <strong>CIBE</strong>
                        <small>Built Environment</small>
                    </div>
                    <span>↗</span>
                </a>

                <!-- CISFM -->
                <a href="pages/gsed.php#cisfm" class="institute">
                    <div class="institute__image" style="background-image: url('assets/images/journey/3.jpg');"></div>
                    
                    <span>03</span>
                    <div>
                        <strong>CISFM</strong>
                        <small>Sustainable Facilities Management</small>
                    </div>
                    <span>↗</span>
                </a>

                <!-- CICEG -->
                <a href="pages/gsed.php#ciceg" class="institute">
                    <div class="institute__image" style="background-image: url('assets/images/journey/4.jpg');"></div>
                    
                    <span>04</span>
                    <div>
                        <strong>CICEG</strong>
                        <small>Carbon, ESG &amp; Green Economy</small>
                    </div>
                    <span>↗</span>
                </a>

            </div>

        </div>

    </section>


        <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="final-cta section final-cta--video">

        <video autoplay muted loop playsinline class="final-cta__video">
            <source src="assets/videos/hero2.mp4" type="video/mp4">
        </video>

        <div class="container">

            <div class="final-cta__content">

                <span class="section-label">
                    SUSTAIN 2026
                </span>

                <h2>
                    Be part of
                    <br>
                    <span>the transition.</span>
                </h2>

                <div class="final-cta__details">
                    <div>
                        <span>DATE</span>
                        <strong>10 NOVEMBER 2026</strong>
                    </div>
                    <div>
                        <span>VENUE</span>
                        <strong>BACC &middot; MALAYSIA</strong>
                    </div>
                </div>

                <a href="pages/register.php" class="btn btn--primary btn--large">
                    Register for SUSTAIN 2026
                    <span>&#8599;</span>
                </a>

            </div>

        </div>

    </section>

    <!-- =====================================================
         COLLABORATORS / PARTNERS
    ====================================================== -->

    <section class="collaborators section" id="collaborators">

        <div class="container">
            <div class="collaborators__header">
                <div class="section-label" style="justify-content: center;">
                    <span>08</span>
                    <span>OUR PARTNERS & COLLABORATORS</span>
                </div>
                <h3 class="collaborators__title">In partnership with industry leaders</h3>
            </div>
        </div>

        <div class="collaborators__marquee">
            <div class="collaborators__marquee-track">
                
                <!-- SET 1 (Logo sebenar) -->
                <img src="assets/images/collaborator/1.png" alt="Collaborator 1" loading="lazy">
                <img src="assets/images/collaborator/2.png" alt="Collaborator 2" loading="lazy">
                <img src="assets/images/collaborator/3.png" alt="Collaborator 3" loading="lazy">
                <img src="assets/images/collaborator/4.png" alt="Collaborator 4" loading="lazy">
                <img src="assets/images/collaborator/5.png" alt="Collaborator 5" loading="lazy">
                
                <!-- SET 2 (Copy paste sebiji set 1 supaya animasi loop nampak cantik) -->
                <img src="assets/images/collaborator/1.png" alt="Collaborator 1" loading="lazy">
                <img src="assets/images/collaborator/2.png" alt="Collaborator 2" loading="lazy">
                <img src="assets/images/collaborator/3.png" alt="Collaborator 3" loading="lazy">
                <img src="assets/images/collaborator/4.png" alt="Collaborator 4" loading="lazy">
                <img src="assets/images/collaborator/5.png" alt="Collaborator 5" loading="lazy">

            </div>
        </div>

    </section>

</main> <!-- Penutup tag main asal -->

<?php
require_once 'includes/footer.php';
?>
