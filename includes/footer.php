<?php
/**
 * SUSTAIN 2026
 * Shared Footer
 */
?>

    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer class="site-footer">

        <div class="container">

            <div class="site-footer__top">

                <!-- BRAND -->

                <div class="site-footer__brand">

                    <a
                        href="index.php"
                        class="site-footer__logo"
                    >
                        SUSTAIN
                        <span>2026</span>
                    </a>

                    <p>
                        Malaysia Sustainability
                        <br>
                        &amp; ESG Conference
                    </p>

                </div>


                <!-- NAVIGATION -->

                <div class="site-footer__nav">

                    <div class="footer-column">

                        <span class="footer-column__title">
                            EXPLORE
                        </span>

                        <a href="conference.php">
                            Conference
                        </a>

                        <a href="tracks.php">
                            Tracks
                        </a>

                        <a href="speakers.php">
                            Speakers
                        </a>

                        <a href="impact.php">
                            Impact
                        </a>

                    </div>


                    <div class="footer-column">

                        <span class="footer-column__title">
                            EXPERIENCE
                        </span>

                        <a href="pages/symposium.php">
                            Academic Symposium
                        </a>

                        <a href="pages/awards.php">
                            Impact Awards
                        </a>

                        <a href="pages/exhibition.php">
                            Exhibition
                        </a>

                        <a href="pages/venue.php">
                            Venue
                        </a>

                    </div>


                    <div class="footer-column">

                        <span class="footer-column__title">
                            CONNECT
                        </span>

                        <a href="pages/register.php">
                            Register
                        </a>

                        <a href="pages/gsed.php">
                            GSED Ecosystem
                        </a>

                    </div>

                </div>

            </div>


            <!-- FOOTER BOTTOM -->

            <div class="site-footer__bottom">

                <span>
                    © <?= date('Y'); ?> SUSTAIN 2026
                </span>

                <span>
                    Olympia Education Malaysia
                </span>

                <span>
                    10 NOVEMBER 2026 · BACC
                </span>

            </div>

        </div>

    </footer>


    <!-- =====================================================
         JAVASCRIPT
    ====================================================== -->

   <script src="<?= $basePath ?? ''; ?>assets/js/main.js"></script>

</body>

</html>