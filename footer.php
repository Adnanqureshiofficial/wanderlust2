<footer class="site-footer">

    <div class="container">

        <div class="footer-grid">

            <!-- Brand -->

            <div class="footer-brand">

                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">

                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/bs-logo.svg"
                        alt="<?php bloginfo('name'); ?>"
                    >

                </a>

                <p>

                    The Science of Radiance. Physician-led aesthetics
                    and direct primary care, brought to you in
                    Carmel, Indiana.

                </p>

            </div>

            <!-- Treatments -->

            <div class="footer-column">

                <h4>

                    Treatments

                </h4>

                <ul>

                    <li><a href="#">Botox</a></li>

                    <li><a href="#">Lip Filler</a></li>

                    <li><a href="#">Radiesse</a></li>

                </ul>

            </div>

            <!-- Contact -->

            <div class="footer-column">

                <h4>

                    Contact

                </h4>

                <ul>

                    <li>(000) 000-0000</li>

                    <li>

                        <a href="mailto:hello@wanderlustaesthetics.com">

                            hello@wanderlustaesthetics.com

                        </a>

                    </li>

                    <li>Carmel, Indiana</li>

                </ul>

            </div>

            <!-- Social -->

            <div class="footer-column">

                <h4>

                    Social

                </h4>

                <ul>

                    <li><a href="#">Instagram</a></li>

                    <li><a href="#">Facebook</a></li>

                    <li><a href="#">TikTok</a></li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <p>

                © <?php echo date('Y'); ?>

                <?php bloginfo('name'); ?>.

                All rights reserved.

            </p>

            <div class="footer-links">

                <a href="#">Privacy Policy</a>

                <span>·</span>

                <a href="#">Terms of Service</a>

            </div>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>