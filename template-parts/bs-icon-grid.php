<?php
/**
 * ============================================================================
 * Blare Studio Reusable Icon Grid Component
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
 *     'columns' => [
 *         [
 *             'icon'        => '',
 *             'title'       => '',
 *             'description' => ''
 *         ]
 *     ],
 *
 *     'cta_text' => '',
 *     'cta_url'  => ''
 *
 * ];
 *
 * ============================================================================
 */

if ( empty( $args ) ) {
    return;
}

$variant = ! empty( $args['variant'] )
    ? sanitize_html_class( $args['variant'] )
    : 'card';

?>

<section class="icon-grid-section section icon-grid-<?php echo esc_attr( $variant ); ?>">

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



        <?php if (
            ! empty( $args['columns'] ) &&
            is_array( $args['columns'] )
        ) : ?>

            <div class="icon-grid">

                <?php foreach ( $args['columns'] as $column ) : ?>

                    <div class="icon-card">

                       <?php if ( ! empty( $column['icon'] ) ) : ?>

    <div class="icon-wrapper">
        <img
            src="<?php echo esc_url( $column['icon'] ); ?>"
            alt=""
            loading="lazy"
        >
    </div>

<?php endif; ?>


                        <?php if ( ! empty( $column['title'] ) ) : ?>

                            <h3 class="icon-card-title">
                                <?php echo esc_html( $column['title'] ); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if ( ! empty( $column['description'] ) ) : ?>

                            <p class="icon-card-description">
                                <?php echo esc_html( $column['description'] ); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

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