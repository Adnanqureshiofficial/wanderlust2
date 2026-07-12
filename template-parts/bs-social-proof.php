<!-- template-parts/bs-social-proof.php -->
<section class="social-proof section">
    <div class="container social-grid">

        <!-- Dynamic Image Block -->
        <div class="social-image">
            <img
                src="<?php echo esc_url($args['image_url']); ?>"
                alt="<?php echo esc_attr($args['image_alt']); ?>">
        </div>

        <div class="social-content">
            <?php if (! empty($args['section_tag'])) : ?>
                <span class="section-tag">
                    <?php echo esc_html($args['section_tag']); ?>
                </span>
            <?php endif; ?>

            <!-- Heading (Allows <br> tag modifications if needed) -->
            <h2 class="section-title">
                <?php echo wp_kses($args['section_title'], array('br' => array())); ?>
            </h2>

            <!-- Dynamic Sign List Loop -->
            <?php if (! empty($args['sign_list']) && is_array($args['sign_list'])) : ?>
                <ul class="sign-list">
                    <?php foreach ($args['sign_list'] as $item) : ?>
                        <li class="sign_list_items"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D8B47C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="education-button">
                                <circle cx="12" cy="12" r="10" />
                                <path d="m12 16 4-4-4-4" />
                                <path d="M8 12h8" />
                            </svg> <div> <?php echo esc_html($item); ?></div></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <!-- CTA Button Block -->
            <a href="<?php echo esc_attr($args['cta_url']); ?>" class="btn">
                <?php echo esc_html($args['cta_text']); ?>
            </a>
        </div>

    </div>
</section>