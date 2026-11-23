<?php
/**
 * Lumecca / Morpheus8 – FAQ Section
 *
 * Expected arguments:
 * section_tag
 * section_title
 * faq_items (array)
 *   - question
 *   - answer
 */

$section_tag   = $args['section_tag'] ?? 'FAQ';
$section_title = $args['section_title'] ?? 'Frequently Asked Questions';
$faq_items     = $args['faq_items'] ?? [];

$valid_faq_items = array_values(array_filter($faq_items, function ($item) {
    return !empty($item['question']) && !empty($item['answer']);
}));

$faq_id = 'lumecca-faq-' . wp_unique_id();
?>

<?php if (!empty($valid_faq_items)) : ?>

<section class="lumecca-faq section" id="<?php echo esc_attr($faq_id); ?>">
    <div class="container">

        <div class="lumecca-faq-header">

            <?php if ($section_tag) : ?>
                <span class="lumecca-faq-tag">
                    <?php echo esc_html($section_tag); ?>
                </span>
            <?php endif; ?>

            <?php if ($section_title) : ?>
                <h2 class="lumecca-faq-title">
                    <?php echo wp_kses($section_title, [
                        'br'     => [],
                        'em'     => [],
                        'strong' => [],
                    ]); ?>
                </h2>
            <?php endif; ?>

        </div>

        <div class="lumecca-faq-list">

            <?php foreach ($valid_faq_items as $index => $item) : ?>
                <?php
                $item_id = $faq_id . '-item-' . ($index + 1);
                ?>

                <details class="lumecca-faq-item">
                    <summary
                        class="lumecca-faq-question"
                        id="<?php echo esc_attr($item_id); ?>"
                    >
                        <span class="lumecca-faq-number">
                            <?php echo esc_html(sprintf('%02d', $index + 1)); ?>
                        </span>

                        <span class="lumecca-faq-question-text">
                            <?php echo esc_html($item['question']); ?>
                        </span>

                        <span class="lumecca-faq-icon" aria-hidden="true"></span>
                    </summary>

                    <div
                        class="lumecca-faq-answer"
                        role="region"
                        aria-labelledby="<?php echo esc_attr($item_id); ?>"
                    >
                        <p><?php echo esc_html($item['answer']); ?></p>
                    </div>
                </details>

            <?php endforeach; ?>

        </div>

    </div>
</section>

<?php endif; ?>
