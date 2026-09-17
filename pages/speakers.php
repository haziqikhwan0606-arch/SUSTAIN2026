<?php

$pageTitle = 'Speakers — SUSTAIN 2026';
$basePath  = '../';

require_once '../includes/header.php';


/* =====================================================
   SPEAKER DATA
   =====================================================

   Bila speaker baru dah confirmed, kau cuma tambah
   satu block dalam array ni.

   IMAGE:
   ../assets/images/speakers/speaker-01.jpg

   LOGO:
   ../assets/images/brands/company-logo.png
   (optional)

===================================================== */

$speakers = [

    [
        'name' => 'Ahmad Abu',
        'title' => 'YBhg. Prof. / Dr. / Mr. / Ms.',
        'position' => 'Position / Role',
        'organisation' => 'Organisation Name',
        'country' => 'Malaysia',
        'category' => 'KEYNOTE SPEAKER',
        'topic' => 'Session or Topic Title',
        'image' => 'assets/images/speakers/speaker-01.jpg',
        'logo' => ''
    ],

    [
        'name' => 'Speaker Name',
        'title' => 'Dr.',
        'position' => 'Position / Role',
        'organisation' => 'Organisation Name',
        'country' => 'Malaysia',
        'category' => 'PANELIST',
        'topic' => 'Session or Topic Title',
        'image' => 'assets/images/speakers/speaker-02.jpg',
        'logo' => ''
    ],

    // =================================================
    // COPY THIS BLOCK FOR MORE SPEAKERS
    // =================================================
    /*
    [
        'name' => 'Speaker Name',
        'title' => 'Dr.',
        'position' => 'Position / Role',
        'organisation' => 'Organisation Name',
        'country' => 'Malaysia',
        'category' => 'PANELIST',
        'topic' => 'Session or Topic Title',
        'image' => '../assets/images/speakers/speaker-03.jpg',
        'logo' => ''
    ],
    */

];

?>

<main class="inner-page speakers-page">


    <!-- =====================================================
         PAGE HERO
    ====================================================== -->

    <section class="speakers-hero">

        <!-- BACKGROUND VIDEO -->

        <video
            class="speakers-hero__video"
            autoplay
            muted
            loop
            playsinline
        >
            <source
                src="../assets/videos/speakers.mp4"
                type="video/mp4"
            >
        </video>


        <!-- VIDEO OVERLAY -->

        <div class="speakers-hero__overlay"></div>


        <!-- HERO TOP -->

        <div class="speakers-hero__top">

            <span>
                SPEAKERS
            </span>

            <span>
                20+ VOICES · 5 COUNTRIES
            </span>

        </div>


        <!-- HERO CONTENT -->

        <div class="speakers-hero__content">

            <p class="eyebrow">
                THE PEOPLE BEHIND THE CONVERSATION
            </p>

            <h1>
                PEOPLE
                <span>WHO</span>
                <br>
                MOVE
                <span>IDEAS.</span>
            </h1>

            <p>
                Leaders, practitioners, policymakers, researchers
                and sustainability voices shaping the conversation
                around Malaysia's transition.
            </p>

        </div>


        <!-- HERO BOTTOM -->

        <div class="speakers-hero__bottom">

            <span>
                LOCAL + INTERNATIONAL
            </span>

            <span>
                SUSTAIN 2026
            </span>

        </div>

    </section>



    <!-- =====================================================
         INTRO / STATS
    ====================================================== -->

    <section class="speakers-intro section section--light">

        <div class="container">

            <div class="speakers-intro__grid">

                <div class="section-index">
                    01
                </div>


                <div>

                    <p class="eyebrow eyebrow--dark">
                        A MULTI-STAKEHOLDER ROOM
                    </p>

                    <h2>
                        Different
                        <span>perspectives.</span>
                        One transition.
                    </h2>

                </div>


                <div class="speakers-intro__copy">

                    <p>
                        SUSTAIN 2026 brings together voices from
                        government, industry, business, finance,
                        academia and the wider sustainability
                        ecosystem.
                    </p>

                    <p>
                        The conference is designed to connect
                        different perspectives — from policy and
                        implementation to reporting, finance and
                        measurable impact.
                    </p>

                </div>

            </div>


            <!-- STATS -->

            <div class="speaker-stats">

                <div class="speaker-stat">

                    <strong>
                        20+
                    </strong>

                    <span>
                        LOCAL & INTERNATIONAL
                        SPEAKERS
                    </span>

                </div>


                <div class="speaker-stat">

                    <strong>
                        200+
                    </strong>

                    <span>
                        INDUSTRY LEADERS
                    </span>

                </div>


                <div class="speaker-stat">

                    <strong>
                        5
                    </strong>

                    <span>
                        COUNTRIES
                    </span>

                </div>


                <div class="speaker-stat">

                    <strong>
                        01
                    </strong>

                    <span>
                        SHARED
                        DIRECTION
                    </span>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         KEYNOTE
    ====================================================== -->

    <section class="speaker-feature speaker-feature--dark">

        <div class="container">

            <div class="speaker-feature__top">

                <span class="section-index section-index--light">
                    02
                </span>

                <p class="eyebrow">
                    KEYNOTE SESSIONS
                </p>

            </div>


            <div class="speaker-feature__heading">

                <h2>
                    THE
                    <span>KEYNOTES.</span>
                </h2>

                <p>
                    High-level perspectives designed to frame
                    the sustainability and ESG conversation.
                </p>

            </div>


            <div class="keynote-list">


                <!-- KEYNOTE 01 -->

                <article class="keynote-item">

                    <span class="keynote-item__number">
                        01
                    </span>

                    <div class="keynote-item__content">

                        <span class="keynote-item__label">
                            KEYNOTE
                        </span>

                        <h3>
                            ESG for SMEs:
                            Why It Matters and
                            How to Start
                        </h3>

                        <p>
                            Understanding the importance of ESG
                            for SMEs and the practical pathway
                            towards implementation.
                        </p>

                    </div>

                    <span class="keynote-item__arrow">
                        ↗
                    </span>

                </article>



                <!-- KEYNOTE 02 -->

                <article class="keynote-item">

                    <span class="keynote-item__number">
                        02
                    </span>

                    <div class="keynote-item__content">

                        <span class="keynote-item__label">
                            OPENING ADDRESS
                        </span>

                        <h3>
                            Malaysia's Sustainability
                            Direction
                        </h3>

                        <p>
                            Opening perspectives on Malaysia's
                            sustainability agenda and national
                            direction.
                        </p>

                    </div>

                    <span class="keynote-item__arrow">
                        ↗
                    </span>

                </article>



                <!-- KEYNOTE 03 -->

                <article class="keynote-item">

                    <span class="keynote-item__number">
                        03
                    </span>

                    <div class="keynote-item__content">

                        <span class="keynote-item__label">
                            KEYNOTE
                        </span>

                        <h3>
                            Traditional Reporting
                            vs Reporting Software
                        </h3>

                        <p>
                            Exploring how technology can support
                            ESG reporting, data management and
                            credibility.
                        </p>

                    </div>

                    <span class="keynote-item__arrow">
                        ↗
                    </span>

                </article>



                <!-- KEYNOTE 04 -->

                <article class="keynote-item">

                    <span class="keynote-item__number">
                        04
                    </span>

                    <div class="keynote-item__content">

                        <span class="keynote-item__label">
                            KEYNOTE
                        </span>

                        <h3>
                            Sustainability,
                            ESG & Access to Finance
                        </h3>

                        <p>
                            Exploring how sustainability and ESG
                            performance can support access to
                            bank financing.
                        </p>

                    </div>

                    <span class="keynote-item__arrow">
                        ↗
                    </span>

                </article>


            </div>

        </div>

    </section>



    <!-- =====================================================
         SPEAKER ECOSYSTEM
    ====================================================== -->

    <section class="speaker-ecosystem section section--grey">

        <div class="container">

            <div class="speaker-ecosystem__heading">

                <div class="section-index">
                    03
                </div>

                <div>

                    <p class="eyebrow eyebrow--dark">
                        SPEAKER ECOSYSTEM
                    </p>

                    <h2>
                        MANY
                        <span>SECTORS.</span>
                        <br>
                        ONE ROOM.
                    </h2>

                </div>

            </div>


            <div class="speaker-roles">


                <!-- ROLE 01 -->

                <article
                    class="speaker-role"
                    style="background-image: url('../assets/images/speakers/1.jpg');"
                >

                    <span>
                        01
                    </span>

                    <div>

                        <small>
                            POLICY
                        </small>

                        <h3>
                            Government
                        </h3>

                        <p>
                            National policy, sustainability
                            direction and industry transition.
                        </p>

                    </div>

                </article>



                <!-- ROLE 02 -->

                <article
                    class="speaker-role"
                    style="background-image: url('../assets/images/speakers/2.jpg');"
                >

                    <span>
                        02
                    </span>

                    <div>

                        <small>
                            BUSINESS
                        </small>

                        <h3>
                            Corporate & SME
                        </h3>

                        <p>
                            Practical ESG implementation,
                            readiness and business transformation.
                        </p>

                    </div>

                </article>



                <!-- ROLE 03 -->

                <article
                    class="speaker-role"
                    style="background-image: url('../assets/images/speakers/3.jpg');"
                >

                    <span>
                        03
                    </span>

                    <div>

                        <small>
                            DISCLOSURE
                        </small>

                        <h3>
                            ESG Reporting
                        </h3>

                        <p>
                            Reporting standards, data,
                            technology and credibility.
                        </p>

                    </div>

                </article>



                <!-- ROLE 04 -->

                <article
                    class="speaker-role"
                    style="background-image: url('../assets/images/speakers/4.jpg');"
                >

                    <span>
                        04
                    </span>

                    <div>

                        <small>
                            FINANCE
                        </small>

                        <h3>
                            Financial Institutions
                        </h3>

                        <p>
                            Sustainable finance, investment,
                            grants and financing pathways.
                        </p>

                    </div>

                </article>



                <!-- ROLE 05 -->

                <article
                    class="speaker-role"
                    style="background-image: url('../assets/images/speakers/5.jpg');"
                >

                    <span>
                        05
                    </span>

                    <div>

                        <small>
                            KNOWLEDGE
                        </small>

                        <h3>
                            Academia & Researchers
                        </h3>

                        <p>
                            Research, innovation and new
                            sustainability knowledge.
                        </p>

                    </div>

                </article>



                <!-- ROLE 06 -->

                <article
                    class="speaker-role"
                    style="background-image: url('../assets/images/speakers/6.jpg');"
                >

                    <span>
                        06
                    </span>

                    <div>

                        <small>
                            INTERNATIONAL
                        </small>

                        <h3>
                            Global Voices
                        </h3>

                        <p>
                            Cross-border perspectives and
                            international collaboration.
                        </p>

                    </div>

                </article>


            </div>

        </div>

    </section>



    <!-- =====================================================
         SPEAKER WALL
    ====================================================== -->

    <section class="speaker-wall section section--light">

        <div class="container">


            <!-- WALL HEADING -->

            <div class="speaker-wall__heading">

                <p class="eyebrow eyebrow--dark">
                    SPEAKERS
                </p>

                <h2>
                    THE
                    <span>VOICES.</span>
                </h2>

                <p>
                    Meet the leaders, practitioners and thinkers
                    shaping the sustainability transition.
                </p>

            </div>



            <!-- =================================================
                 SPEAKER GRID
            ================================================== -->

            <?php if (!empty($speakers)): ?>

                <div class="speaker-grid">

                    <?php foreach ($speakers as $index => $speaker): ?>

                        <article class="speaker-card">


                            <!-- SPEAKER IMAGE -->

                            <div class="speaker-card__image">

                                <?php if (!empty($speaker['image'])): ?>

                                    <img
                                        src="<?= htmlspecialchars($speaker['image']) ?>"
                                        alt="<?= htmlspecialchars($speaker['name']) ?>"
                                        loading="lazy"
                                    >

                                <?php else: ?>

                                    <div class="speaker-card__placeholder">
                                        <span>+</span>
                                    </div>

                                <?php endif; ?>

                            </div>



                            <!-- SPEAKER CONTENT -->

                            <div class="speaker-card__content">


                                <!-- META -->

                                <div class="speaker-card__meta">

                                    <span class="speaker-card__number">

                                        <?= str_pad(
                                            $index + 1,
                                            2,
                                            '0',
                                            STR_PAD_LEFT
                                        ) ?>

                                    </span>


                                    <?php if (!empty($speaker['category'])): ?>

                                        <span class="speaker-card__category">

                                            <?= htmlspecialchars(
                                                $speaker['category']
                                            ) ?>

                                        </span>

                                    <?php endif; ?>

                                </div>



                                <!-- NAME -->

                                <h3>

                                    <?php if (!empty($speaker['title'])): ?>

                                        <?= htmlspecialchars(
                                            $speaker['title']
                                        ) ?>

                                    <?php endif; ?>

                                    <?= htmlspecialchars(
                                        $speaker['name']
                                    ) ?>

                                </h3>



                                <!-- POSITION / ORGANISATION -->

                                <p class="speaker-card__position">

                                    <?php if (!empty($speaker['position'])): ?>

                                        <?= htmlspecialchars(
                                            $speaker['position']
                                        ) ?>

                                    <?php endif; ?>


                                    <?php if (!empty($speaker['organisation'])): ?>

                                        <br>

                                        <span>

                                            <?= htmlspecialchars(
                                                $speaker['organisation']
                                            ) ?>

                                        </span>

                                    <?php endif; ?>

                                </p>



                                <!-- SESSION / TOPIC -->

                                <?php if (!empty($speaker['topic'])): ?>

                                    <div class="speaker-card__topic">

                                        <span class="speaker-card__topic-label">
                                            SESSION
                                        </span>

                                        <p>
                                            <?= htmlspecialchars(
                                                $speaker['topic']
                                            ) ?>
                                        </p>

                                    </div>

                                <?php endif; ?>



                                <!-- COUNTRY -->

                                <?php if (!empty($speaker['country'])): ?>

                                    <span class="speaker-card__country">

                                        <?= htmlspecialchars(
                                            $speaker['country']
                                        ) ?>

                                    </span>

                                <?php endif; ?>


                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>

            <?php else: ?>


                <!-- EMPTY STATE -->

                <div class="speaker-empty">

                    <span>
                        01
                    </span>

                    <h3>
                        SPEAKER
                        ANNOUNCEMENTS
                        <span>
                            COMING SOON.
                        </span>
                    </h3>

                    <p>
                        Speaker details will be announced as the
                        SUSTAIN 2026 programme is confirmed.
                    </p>

                </div>


            <?php endif; ?>


        </div>

    </section>



    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="inner-cta section section--light">

        <div class="container">

            <p class="eyebrow eyebrow--dark">
                10 NOVEMBER 2026 · BACC · MALAYSIA
            </p>

            <h2>
                BE IN THE
                <span>ROOM.</span>
            </h2>

            <a
                href="register.php"
                class="button button--dark"
            >

                Register for SUSTAIN 2026

                <span>
                    ↗
                </span>

            </a>

        </div>

    </section>


</main>


<?php require_once '../includes/footer.php'; ?>