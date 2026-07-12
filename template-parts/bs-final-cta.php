\<!-- template-parts/bs-final-cta.php -->
<section class="final-cta section" id="CTAForm">
    <div class="container">

        <div class="cta-card">
            <div class="cta-inner">

                <!-- Section Tag Label -->
                <?php if ( ! empty( $args['section_tag'] ) ) : ?>
                    <span class="section-tag">
                        <?php echo esc_html( $args['section_tag'] ); ?>
                    </span>
                <?php endif; ?>

                <!-- Section Main Title -->
                <h2 class="section-title">
                    <?php echo esc_html( $args['section_title'] ); ?>
                </h2>

                <!-- Subtitle Description -->
                <?php if ( ! empty( $args['section_description'] ) ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $args['section_description'] ); ?>
                    </p>
                <?php endif; ?>

                <!-- Dynamic Form Output Execution -->
                <?php if ( ! empty( $args['form_shortcode'] ) ) : ?>
                    <div class="bs-form-container">
                        <?php 
                        // Executes the parsed shortcode string securely
                        echo do_shortcode( $args['form_shortcode'] ); 
                        ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>

    </div>
</section>
