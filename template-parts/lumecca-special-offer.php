
<?php
/**
 * Special Offer Section
 *
 * Expected arguments:
 * section_tag
 * section_title
 * section_description
 * image_url
 * image_alt
 * package_items
 * package_price
 * package_label
 * package_note
 * cta_text
 * cta_url
 * disclaimer
 */

$section_tag = $args['section_tag'] ?? 'LIMITED-TIME OFFER';

$section_title = $args['section_title'] ?? '';

$section_description = $args['section_description'] ?? '';

$image_url = $args['image_url'] ?? '';

$image_alt = $args['image_alt'] ?? '';

$package_items = $args['package_items'] ?? [];

$package_price = $args['package_price'] ?? '$1,899';

$package_label = $args['package_label'] ?? '3 Sessions Included';

$package_note = $args['package_note'] ?? 'Face & Neck';

$cta_text = $args['cta_text'] ?? 'CLAIM YOUR PACKAGE';

$cta_url = $args['cta_url'] ?? '#consultation';

$disclaimer = $args['disclaimer'] ?? '';

$section_id = 'lumecca-special-offer-' . wp_unique_id();
?>

<section
    class="lumecca-offer"
    id="<?php echo esc_attr($section_id); ?>"
>

    <div class="lumecca-offer__container">

        <?php if (!empty($image_url)) : ?>

            <div class="lumecca-offer__image">

                <img
                    src="<?php echo esc_url($image_url); ?>"
                    alt="<?php echo esc_attr($image_alt); ?>"
                    loading="lazy"
                >

                <div class="lumecca-offer__image-overlay"></div>

                <div class="lumecca-offer__image-badge">
                    <span>EXCLUSIVE PACKAGE</span>
                    <strong>3 Sessions</strong>
                    <span>Face & Neck</span>
                </div>

            </div>

        <?php endif; ?>


        <div class="lumecca-offer__content">

            <div class="lumecca-offer__header">

                <?php if (!empty($section_tag)) : ?>
                    <span class="lumecca-offer__tag">
                        <?php echo esc_html($section_tag); ?>
                    </span>
                <?php endif; ?>

                <?php if (!empty($section_title)) : ?>
                    <h2 class="lumecca-offer__title">
                        <?php echo wp_kses($section_title, [
                            'br' => [],
                            'em' => [],
                            'strong' => []
                        ]); ?>
                    </h2>
                <?php endif; ?>

                <?php if (!empty($section_description)) : ?>
                    <p class="lumecca-offer__description">
                        <?php echo esc_html($section_description); ?>
                    </p>
                <?php endif; ?>

            </div>


            <?php if (!empty($package_items)) : ?>

                <div class="lumecca-offer__inclusions">

                    <span class="lumecca-offer__inclusions-label">
                        YOUR PACKAGE INCLUDES
                    </span>

                    <ul class="lumecca-offer__list">

                        <?php foreach ($package_items as $item) : ?>

                            <li>
                                <span class="lumecca-offer__check">
                                    <svg
                                        viewBox="0 0 20 20"
                                        aria-hidden="true"
                                    >
                                        <path
                                            d="M4 10.5L8 14.5L16 5.5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </span>

                                <span>
                                    <?php echo esc_html($item); ?>
                                </span>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            <?php endif; ?>


            <div class="lumecca-offer__price-card">

                <div class="lumecca-offer__price-details">

                    <span class="lumecca-offer__price-label">
                        YOUR PACKAGE PRICE
                    </span>

                    <div class="lumecca-offer__price">
                        <?php echo esc_html($package_price); ?>
                    </div>

                    <span class="lumecca-offer__package-label">
                        <?php echo esc_html($package_label); ?>
                    </span>

                    <span class="lumecca-offer__package-note">
                        <?php echo esc_html($package_note); ?>
                    </span>

                </div>

                <div class="lumecca-offer__price-decoration">
                    <span>EXCLUSIVE</span>
                    <span>OFFER</span>
                </div>

            </div>


            <div class="lumecca-offer__action">

                <a
                    href="<?php echo esc_url($cta_url); ?>"
                    class="lumecca-offer__button"
                >
                    <span><?php echo esc_html($cta_text); ?></span>

                    <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path
                            d="M5 12H19M12 5L19 12L12 19"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>

                <?php if (!empty($disclaimer)) : ?>
                    <p class="lumecca-offer__disclaimer">
                        <?php echo esc_html($disclaimer); ?>
                    </p>
                <?php endif; ?>

            </div>

        </div>

    </div>

</section>
