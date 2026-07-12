<!-- template-parts/bs-before-after.php -->
<section class="before-after section">
    <div class="container">

        <!-- Header Content -->
        <div class="section-header">
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
        </div>

        <!-- Slider Comparison Wrapper -->
        <div class="compare-wrapper">
            <div class="comparison-slider" id="comparisonSlider">
                
                <!-- AFTER IMAGE (Base Layer) -->
                <img
                    src="<?php echo esc_url( $args['after_image_url'] ); ?>"
                    class="comparison-image after-image"
                    alt="<?php echo esc_attr( $args['after_image_alt'] ); ?>"
                >

                <!-- BEFORE IMAGE (Overlay Clip Layer) -->
                <div class="comparison-overlay">
                    <img
                        src="<?php echo esc_url( $args['before_image_url'] ); ?>"
                        class="comparison-image before-image"
                        alt="<?php echo esc_attr( $args['before_image_alt'] ); ?>"
                    >
                </div>

                <!-- Divider & Handle Elements -->
                <div class="comparison-divider">
                    <div class="comparison-handle">
                        ↔
                    </div>
                </div>

                <!-- Hardcoded Layout Labels -->
                <span class="label before-label">
                    <?php echo esc_html( ! empty( $args['before_label'] ) ? $args['before_label'] : 'Before' ); ?>
                </span>
                <span class="label after-label">
                    <?php echo esc_html( ! empty( $args['after_label'] ) ? $args['after_label'] : 'After' ); ?>
                </span>

            </div>
        </div>

        <!-- Explainer Caption Hint -->
        <?php if ( ! empty( $args['drag_hint_text'] ) ) : ?>
            <div class="drag-text">
                <?php echo esc_html( $args['drag_hint_text'] ); ?>
            </div>
        <?php endif; ?>

        <!-- Conversion Call To Action -->
        <a href="<?php echo esc_attr( $args['cta_url'] ); ?>" class="btn compare-btn">
            <?php echo esc_html( $args['cta_text'] ); ?>
        </a>

    </div>
</section>
