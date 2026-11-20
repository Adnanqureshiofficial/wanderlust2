<?php
/**
 * ============================================================================
 * Blare Studio - Icon Card Grid Component
 * ============================================================================
 *
 * Expected Arguments:
 *
 * $args = [
 *
 *     'section_tag'         => '',
 *     'section_title'       => '',
 *     'section_description' => '',
 *
 *     'cards' => [
 *         [
 *             'icon'        => '',
 *             'title'       => '',
 *             'description' => ''
 *         ]
 *     ],
 *
 *     'bottom_title'        => '',
 *     'bottom_description'  => '',
 *
 *     'cta_text'            => '',
 *     'cta_url'             => ''
 *
 * ];
 *
 * ============================================================================
 */

if ( empty( $args ) ) {
    return;
}

?>

<section class="icon-card-grid-section section">

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


        <?php if ( ! empty( $args['cards'] ) && is_array( $args['cards'] ) ) : ?>

            <div class="icon-card-grid">

                <?php foreach ( $args['cards'] as $card ) : ?>

                    <div class="problem-card">

                        <?php if ( ! empty( $card['icon'] ) ) : ?>

                            <div class="problem-icon">

                                <img
                                    src="<?php echo esc_url( $card['icon'] ); ?>"
                                    alt="<?php echo esc_attr( $card['title'] ?? '' ); ?>"
                                    loading="lazy">

                            </div>

                        <?php endif; ?>


                        <?php if ( ! empty( $card['title'] ) ) : ?>

                            <h3 class="problem-title">

                                <?php echo esc_html( $card['title'] ); ?>

                            </h3>

                        <?php endif; ?>


                        <?php if ( ! empty( $card['description'] ) ) : ?>

                            <p class="problem-description">

                                <?php echo esc_html( $card['description'] ); ?>

                            </p>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>


        <?php if (
            ! empty( $args['bottom_title'] ) ||
            ! empty( $args['bottom_description'] )
        ) : ?>

            <div class="problem-bottom-text">

                <?php if ( ! empty( $args['bottom_title'] ) ) : ?>

                    <h3>

                        <?php echo esc_html( $args['bottom_title'] ); ?>

                    </h3>

                <?php endif; ?>


                <?php if ( ! empty( $args['bottom_description'] ) ) : ?>

                    <p>

                        <?php echo esc_html( $args['bottom_description'] ); ?>

                    </p>

                <?php endif; ?>

            </div>

        <?php endif; ?>


        <?php if (
            ! empty( $args['cta_text'] ) &&
            ! empty( $args['cta_url'] )
        ) : ?>

            <div class="btn-center">

                <a
                    href="<?php echo esc_url( $args['cta_url'] ); ?>"
                    class="btn">

                    <?php echo esc_html( $args['cta_text'] ); ?>

                </a>

            </div>

        <?php endif; ?>

    </div>

</section>