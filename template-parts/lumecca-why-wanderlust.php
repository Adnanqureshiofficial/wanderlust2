<?php
/**
 * Lumecca – Why Wanderlust Section
 *
 * Expected arguments:
 * section_tag
 * section_title
 * section_description
 * cards (array)
 *   - number
 *   - title
 *   - description
 */

$section_tag         = $args['section_tag'] ?? '';
$section_title       = $args['section_title'] ?? '';
$section_description = $args['section_description'] ?? '';
$cards               = $args['cards'] ?? [];
?>

<?php if ($section_title || $section_description || !empty($cards)) : ?>
    <section class="lumecca-why section">
        <div class="container">

            <div class="lumecca-why-header">

                <?php if ($section_tag) : ?>
                    <span class="lumecca-why-tag">
                        <?php echo esc_html($section_tag); ?>
                    </span>
                <?php endif; ?>

                <?php if ($section_title) : ?>
                    <h2 class="lumecca-why-title">
                        <?php echo wp_kses($section_title, [
                            'br'     => [],
                            'em'     => [],
                            'strong' => [],
                        ]); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($section_description) : ?>
                    <p class="lumecca-why-description">
                        <?php echo esc_html($section_description); ?>
                    </p>
                <?php endif; ?>

            </div>

            <?php if (!empty($cards)) : ?>
                <div class="lumecca-why-grid">

                    <?php foreach ($cards as $card) : ?>
                        <div class="lumecca-why-card">

                            <?php if (!empty($card['number'])) : ?>
                                <span class="lumecca-why-card-number">
                                    <?php echo esc_html($card['number']); ?>
                                </span>
                            <?php endif; ?>

                            <?php if (!empty($card['title'])) : ?>
                                <h3 class="lumecca-why-card-title">
                                    <?php echo esc_html($card['title']); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if (!empty($card['description'])) : ?>
                                <p class="lumecca-why-card-description">
                                    <?php echo esc_html($card['description']); ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>
