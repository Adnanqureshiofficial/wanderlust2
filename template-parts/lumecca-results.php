<?php
/**
 * Lumecca – Results Section
 *
 * Expected arguments:
 * section_tag
 * section_title
 * section_description
 * before_image_url
 * before_image_alt
 * before_label
 * after_image_url
 * after_image_alt
 * after_label
 * disclaimer
 */

$section_tag         = $args['section_tag'] ?? '';
$section_title       = $args['section_title'] ?? '';
$section_description = $args['section_description'] ?? '';
$before_image_url    = $args['before_image_url'] ?? '';
$before_image_alt    = $args['before_image_alt'] ?? '';

$after_image_url     = $args['after_image_url'] ?? '';
$after_image_alt     = $args['after_image_alt'] ?? '';

$disclaimer          = $args['disclaimer'] ?? '';
?>

<?php if ($section_title || $before_image_url || $after_image_url) : ?>
    <section class="lumecca-results section">
        <div class="container">

            <div class="lumecca-results-header">

                <?php if ($section_tag) : ?>
                    <span class="lumecca-results-tag">
                        <?php echo esc_html($section_tag); ?>
                    </span>
                <?php endif; ?>

                <?php if ($section_title) : ?>
                    <h2 class="lumecca-results-title">
                        <?php echo wp_kses($section_title, [
                            'br'     => [],
                            'em'     => [],
                            'strong' => [],
                        ]); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($section_description) : ?>
                    <p class="lumecca-results-description">
                        <?php echo esc_html($section_description); ?>
                    </p>
                <?php endif; ?>

            </div>

            <?php if ($before_image_url || $after_image_url) : ?>
                <div class="lumecca-results-comparison">

                    <?php if ($before_image_url) : ?>
                        <div class="lumecca-results-item">

                           

                            <div class="lumecca-results-image">
                                <img
                                    src="<?php echo esc_url($before_image_url); ?>"
                                    alt="<?php echo esc_attr($before_image_alt); ?>"
                                    loading="lazy"
                                >
                            </div>

                        </div>
                    <?php endif; ?>

                    <?php if ($after_image_url) : ?>
                        <div class="lumecca-results-item">

                                

                            <div class="lumecca-results-image">
                                <img
                                    src="<?php echo esc_url($after_image_url); ?>"
                                    alt="<?php echo esc_attr($after_image_alt); ?>"
                                    loading="lazy"
                                >
                            </div>

                        </div>
                    <?php endif; ?>

                </div>
            <?php endif; ?>

            <?php if ($disclaimer) : ?>
                <p class="lumecca-results-disclaimer">
                    <?php echo esc_html($disclaimer); ?>
                </p>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>