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

     <div class="results-slider">

    <div class="results-track">

        <?php foreach($args['gallery_images'] as $image): ?>

            <div class="result-slide">

                <img
                    src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>"
                >

            </div>

        <?php endforeach; ?>

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
