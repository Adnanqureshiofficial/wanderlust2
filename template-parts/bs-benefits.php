<?php
/**
 * ============================================================================
 * Blare Studio - Feature List
 * ============================================================================
 */

if ( empty( $args ) ) {
    return;
}
?>

<section class="feature-list-section section">

    <div class="container">

        <?php if (
            ! empty( $args['section_tag'] ) ||
            ! empty( $args['section_title'] ) ||
            ! empty( $args['section_description'] )
        ) : ?>

            <div class="section-header">

                <?php if ( ! empty( $args['section_tag'] ) ) : ?>
                    <span class="section-tag">
                        <?php echo esc_html( $args['section_tag'] ); ?>
                    </span>
                <?php endif; ?>

                <?php if ( ! empty( $args['section_title'] ) ) : ?>
                    <h2 class="section-title">
                        <?php echo esc_html( $args['section_title'] ); ?>
                    </h2>
                <?php endif; ?>

                <?php if ( ! empty( $args['section_description'] ) ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $args['section_description'] ); ?>
                    </p>
                <?php endif; ?>

            </div>

        <?php endif; ?>


        <?php if ( ! empty( $args['items'] ) ) : ?>

            <div class="feature-list-grid">

                <?php foreach ( $args['items'] as $item ) : ?>

                    <div class="feature-row">

                        <?php if ( ! empty( $item['image'] ) ) : ?>

                            <div class="feature-image">

                                <img
                                    src="<?php echo esc_url( $item['image'] ); ?>"
                                    alt="<?php echo esc_attr( $item['title'] ?? '' ); ?>"
                                    loading="lazy">

                            </div>

                        <?php endif; ?>


                        <div class="feature-content">

                            <?php if ( ! empty( $item['title'] ) ) : ?>

                                <h3>

                                    <?php echo esc_html( $item['title'] ); ?>

                                </h3>

                            <?php endif; ?>


                            <?php if ( ! empty( $item['description'] ) ) : ?>

                                <p>

                                    <?php echo esc_html( $item['description'] ); ?>

                                </p>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>