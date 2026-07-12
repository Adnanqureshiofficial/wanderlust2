<?php
/**
 * template-parts/bs-pain-points.php
 */
?>

<section class="pain-points section">

    <div class="container">

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

        <?php if ( ! empty( $args['items'] ) && is_array( $args['items'] ) ) : ?>

            <div class="pain-points-card">

                <ul class="pain-points-list">

                    <?php foreach ( $args['items'] as $item ) : ?>

                        <li>

                            <span class="pain-check">
                                ✓
                            </span>

                            <span class="pain-text">
                                <?php echo esc_html( $item ); ?>
                            </span>

                        </li>

                    <?php endforeach; ?>

                </ul>

                <a
                    href="<?php echo esc_url( $args['cta_url'] ); ?>"
                    class="btn pain-btn">

                    <?php echo esc_html( $args['cta_text'] ); ?>

                </a>

            </div>

        <?php endif; ?>

    </div>

</section>