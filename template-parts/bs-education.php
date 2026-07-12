<?php
/**
 * template-parts/bs-education.php
 */
?>

<section class="education section">

    <div class="container">

        <div class="education-grid">

            <div class="education-content">

                <?php if ( ! empty( $args['section_tag'] ) ) : ?>
                    <span class="section-tag">
                        <?php echo esc_html( $args['section_tag'] ); ?>
                    </span>
                <?php endif; ?>

                <h2 class="section-title">
                    <?php echo esc_html( $args['section_title'] ); ?>
                </h2>

                <?php if ( ! empty( $args['description'] ) ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $args['description'] ); ?>
                    </p>
                <?php endif; ?>

                <?php if ( ! empty( $args['points'] ) && is_array( $args['points'] ) ) : ?>

                    <ul class="education-list">

                        <?php foreach ( $args['points'] as $point ) : ?>

                            <li>

                                <span class="education-icon">
                                    ✓
                                </span>

                                <span>
                                    <?php echo esc_html( $point ); ?>
                                </span>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>

            </div>

            <?php if ( ! empty( $args['image_url'] ) ) : ?>

                <div class="education-image">

                    <img
                        src="<?php echo esc_url( $args['image_url'] ); ?>"
                        alt="<?php echo esc_attr( $args['image_alt'] ); ?>"
                    >

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>