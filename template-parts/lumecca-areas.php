<?php
/**
 * Lumecca – Areas & Skin Concerns Section
 *
 * Expected arguments:
 * section_tag
 * section_title
 * images (array)
 *   - image_url
 *   - image_alt
 * content_title
 * table_headers (array)
 *   - concern
 *   - goal
 * concerns (array)
 *   - concern
 *   - goal
 */

$section_tag   = $args['section_tag'] ?? '';
$section_title = $args['section_title'] ?? '';
$images        = $args['images'] ?? [];
$content_title = $args['content_title'] ?? '';
$table_headers = $args['table_headers'] ?? [];
$concerns      = $args['concerns'] ?? [];
?>

<?php if ($section_title || !empty($images) || !empty($concerns)) : ?>
    <section class="lumecca-areas section">
        <div class="container">

            <div class="lumecca-areas-header">

                <?php if ($section_tag) : ?>
                    <span class="lumecca-areas-tag">
                        <?php echo esc_html($section_tag); ?>
                    </span>
                <?php endif; ?>

                <?php if ($section_title) : ?>
                    <h2 class="lumecca-areas-title">
                        <?php echo wp_kses($section_title, [
                            'br'     => [],
                            'em'     => [],
                            'strong' => [],
                        ]); ?>
                    </h2>
                <?php endif; ?>

            </div>

            <?php if (!empty($images)) : ?>
                <div class="lumecca-areas-gallery">

                    <?php foreach ($images as $image) : ?>
                        <?php if (!empty($image['image_url'])) : ?>
                            <div class="lumecca-areas-image">

                                <img
                                    src="<?php echo esc_url($image['image_url']); ?>"
                                    alt="<?php echo esc_attr($image['image_alt'] ?? ''); ?>"
                                    loading="lazy"
                                >

                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>

            <?php if ($content_title) : ?>
                <h3 class="lumecca-areas-content-title">
                    <?php echo esc_html($content_title); ?>
                </h3>
            <?php endif; ?>

            <?php if (!empty($concerns)) : ?>
                <div class="lumecca-areas-table-wrapper">
                    <table class="lumecca-areas-table">

                        <?php if (!empty($table_headers)) : ?>
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <?php echo esc_html($table_headers['concern'] ?? ''); ?>
                                    </th>

                                    <th scope="col">
                                        <?php echo esc_html($table_headers['goal'] ?? ''); ?>
                                    </th>
                                </tr>
                            </thead>
                        <?php endif; ?>

                        <tbody>
                            <?php foreach ($concerns as $item) : ?>
                                <tr>
                                    <td>
                                        <?php echo esc_html($item['concern'] ?? ''); ?>
                                    </td>

                                    <td>
                                        <?php echo esc_html($item['goal'] ?? ''); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>