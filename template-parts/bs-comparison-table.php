<?php
/**
 * Template Part: Comparison Table
 */

if ( empty( $args ) ) {
    return;
}

$section_tag         = $args['section_tag'] ?? '';
$section_title       = $args['section_title'] ?? '';
$section_description = $args['section_description'] ?? '';
$left_heading        = $args['left_heading'] ?? '';
$right_heading       = $args['right_heading'] ?? '';
$rows                = $args['rows'] ?? [];
$cta_text            = $args['cta_text'] ?? '';
$cta_url             = $args['cta_url'] ?? '';
?>

<section class="comparison-table section">

    <div class="container">

        <div class="section-header">

            <?php if ( $section_tag ) : ?>
                <span class="section-tag">
                    <?php echo esc_html( $section_tag ); ?>
                </span>
            <?php endif; ?>

            <h2 class="section-title">
                <?php echo esc_html( $section_title ); ?>
            </h2>

            <?php if ( $section_description ) : ?>
                <p class="section-description">
                    <?php echo esc_html( $section_description ); ?>
                </p>
            <?php endif; ?>

        </div>

        <div class="comparison-wrapper">

            <div class="comparison-header">

                <div class="comparison-col comparison-left">

                    <?php echo esc_html( $left_heading ); ?>

                </div>

                <div class="comparison-col comparison-right">

                    <?php echo esc_html( $right_heading ); ?>

                </div>

            </div>

            <?php foreach ( $rows as $row ) : ?>

                <div class="comparison-row">

                    <div class="comparison-col">

                        <?php echo esc_html( $row['left'] ); ?>

                    </div>

                    <div class="comparison-col comparison-highlight">

                        <?php echo esc_html( $row['right'] ); ?>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <?php if ( $cta_text ) : ?>

            <div class="comparison-cta">

                <a href="<?php echo esc_url( $cta_url ); ?>" class="btn">

                    <?php echo esc_html( $cta_text ); ?>

                </a>

            </div>

        <?php endif; ?>

    </div>

</section>