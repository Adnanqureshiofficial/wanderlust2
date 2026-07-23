<?php
/**
 * ============================================================================
 * Blare Studio - Treatment Journey
 * ============================================================================
 */

if ( empty( $args ) ) {
    return;
}
?>

<section class="bs-treatment-journey section">

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


        <?php if ( ! empty( $args['steps'] ) ) : ?>

            <div class="journey-grid">

                <?php foreach ( $args['steps'] as $step ) : ?>

                    <div class="journey-card">

                        <?php if ( ! empty( $step['step'] ) ) : ?>

                            <span class="journey-step">

                                <?php echo esc_html( $step['step'] ); ?>

                            </span>

                        <?php endif; ?>


                        <?php if ( ! empty( $step['title'] ) ) : ?>

                            <h3 class="journey-title">

                                <?php echo esc_html( $step['title'] ); ?>

                            </h3>

                        <?php endif; ?>


                        <?php if ( ! empty( $step['description'] ) ) : ?>

                            <p class="journey-description">

                                <?php echo esc_html( $step['description'] ); ?>

                            </p>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>