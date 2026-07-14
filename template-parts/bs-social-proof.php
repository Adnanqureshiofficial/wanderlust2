<!-- template-parts/bs-social-proof.php -->
<section class="social-proof section">
    <div class="container social-grid">

      
<!-- Dynamic Video Block -->
<?php if ( ! empty( $args['video_url'] ) ) : ?>

<div class="social-video">

    <video
        class="testimonial-video"
        preload="metadata"
        playsinline
        muted
        autoplay
        loop
        poster="<?php echo esc_url( $args['poster_image'] ?? '' ); ?>">

        <source
            src="<?php echo esc_url( $args['video_url'] ); ?>"
            type="video/mp4">

        Your browser does not support the video tag.

    </video>

    <button
        class="video-sound-toggle"
        type="button"
        aria-label="Toggle Sound">

        🔇

    </button>

</div>

<?php endif; ?>
<div class="social-content">

    <?php if ( ! empty( $args['section_tag'] ) ) : ?>
        <span class="section-tag">
            <?php echo esc_html( $args['section_tag'] ); ?>
        </span>
    <?php endif; ?>

    <?php if ( ! empty( $args['section_title'] ) ) : ?>
        <h2 class="section-title">
            <?php
            echo wp_kses(
                $args['section_title'],
                array(
                    'br' => array(),
                    'em' => array(),
                    'strong' => array()
                )
            );
            ?>
        </h2>
    <?php endif; ?>


    <!-- Paragraph Content -->
    <?php if ( ! empty( $args['content'] ) ) : ?>

        <div class="social-text">

            <?php
            // Supports either a string or an array of paragraphs.
            if ( is_array( $args['content'] ) ) :

                foreach ( $args['content'] as $paragraph ) : ?>

                    <i><?php echo esc_html( $paragraph ); ?></i>

                <?php endforeach;

            else : ?>

                <i><?php echo esc_html( $args['content'] ); ?></i>

            <?php endif; ?>

        </div>

    <?php endif; ?>


    <!-- Sign List -->
    <?php if ( ! empty( $args['sign_list'] ) && is_array( $args['sign_list'] ) ) : ?>

        <ul class="sign-list">

            <?php foreach ( $args['sign_list'] as $item ) : ?>

                <li class="sign_list_items">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#D8B47C"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="education-button">

                        <circle cx="12" cy="12" r="10" />
                        <path d="m12 16 4-4-4-4" />
                        <path d="M8 12h8" />

                    </svg>

                    <div><?php echo esc_html( $item ); ?></div>

                </li>

            <?php endforeach; ?>

        </ul>

    <?php endif; ?>


    <?php if ( ! empty( $args['cta_text'] ) ) : ?>

        <a href="<?php echo esc_url( $args['cta_url'] ); ?>" class="btn">
            <?php echo esc_html( $args['cta_text'] ); ?>
        </a>

    <?php endif; ?>

</div>

    </div>
</section>