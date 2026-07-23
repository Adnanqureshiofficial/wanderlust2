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

        <?php foreach ( $args['gallery_images'] as $image ) : ?>

            <div class="result-slide">

                <img
                    src="<?php echo esc_url( $image['url'] ); ?>"
                    alt="<?php echo esc_attr( $image['alt'] ); ?>">


<?php if ( ! empty( $image['review'] ) ) : ?>

        <div class="review-card">

            <div class="review-header">

                <img
                    class="review-profile"
                    src="<?php echo esc_url( get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png' ); ?>"
                    alt="Customer Profile">

                <span class="review-name">
                    <?php echo esc_html( $image['review']['name'] ); ?>
                </span>

            </div>

            <div class="review-rating">

                <?php
                $rating = intval( $image['review']['rating'] );

                for ( $i = 0; $i < $rating; $i++ ) {
                    echo '★';
                }
                ?>

            </div>

            <p class="review-text">
                <?php echo esc_html( $image['review']['text'] ); ?>
            </p>

        </div>

    <?php endif; ?>
            </div>

        <?php endforeach; ?>

    </div>

    <button
        class="slider-toggle"
        type="button"
        aria-label="Pause Slideshow">

        | |

    </button>

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
