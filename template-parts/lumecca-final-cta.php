
<!-- template-parts/bs-final-cta.php -->
<section class="final-cta section" id="CTAForm">
    <div class="container">

        <div class="cta-card">
            <div class="cta-inner">

                <!-- CTA Content -->
                <div class="cta-content">

                    <?php if ( ! empty( $args['section_tag'] ) ) : ?>
                        <span class="section-tag">
                            <?php echo esc_html( $args['section_tag'] ); ?>
                        </span>
                    <?php endif; ?>

                    <h2 class="section-title">
                        <?php echo esc_html( $args['section_title'] ); ?>
                    </h2>

                    <?php if ( ! empty( $args['section_description'] ) ) : ?>
                        <p class="section-description">
                            <?php echo esc_html( $args['section_description'] ); ?>
                        </p>
                    <?php endif; ?>

                    <!-- Optional Offer Details -->
                    <?php if ( ! empty( $args['offer_price'] ) ) : ?>
                        <div class="final-cta-offer">

                            <?php if ( ! empty( $args['offer_label'] ) ) : ?>
                                <span class="final-cta-offer-label">
                                    <?php echo esc_html( $args['offer_label'] ); ?>
                                </span>
                            <?php endif; ?>

                            <div class="final-cta-offer-price">
                                <?php echo esc_html( $args['offer_price'] ); ?>
                            </div>

                            <?php if ( ! empty( $args['offer_note'] ) ) : ?>
                                <span class="final-cta-offer-note">
                                    <?php echo esc_html( $args['offer_note'] ); ?>
                                </span>
                            <?php endif; ?>

                            <?php if ( ! empty( $args['offer_description'] ) ) : ?>
                                <p class="final-cta-offer-description">
                                    <?php echo esc_html( $args['offer_description'] ); ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                </div>

                <!-- Form -->
                <?php if ( ! empty( $args['form_shortcode'] ) ) : ?>
                    <div class="bs-form-container">

                        <?php if ( ! empty( $args['service_name'] ) ) : ?>
                            <div class="selected-service">
                                <span class="selected-service-label">
                                    Selected Service:
                                </span>

                                <span class="selected-service-name">
                                    <?php echo esc_html( $args['service_name'] ); ?>
                                </span>
                            </div>
                        <?php endif; ?>

                        <?php echo do_shortcode( $args['form_shortcode'] ); ?>

                    </div>
                <?php endif; ?>

            </div>
        </div>

    </div>
</section>
