<?php

/**
 * ============================================================================
 * Blare Studio - How the treatment works
 */

if (empty($args)) {
    return;
}

?>

<section class="bs-treatment-process section">

    <div class="container">

        <?php if (
            ! empty($args['section_tag']) ||
            ! empty($args['section_title']) ||
            ! empty($args['section_description'])
        ) : ?>

            <div class="section-header">

                <?php if (! empty($args['section_tag'])) : ?>

                    <span class="section-tag">

                        <?php echo esc_html($args['section_tag']); ?>

                    </span>

                <?php endif; ?>


                <?php if (! empty($args['section_title'])) : ?>

                    <h2 class="section-title">

                        <?php echo esc_html($args['section_title']); ?>

                    </h2>

                <?php endif; ?>


                <?php if (! empty($args['section_description'])) : ?>

                    <p class="section-description">

                        <?php echo esc_html($args['section_description']); ?>

                    </p>

                <?php endif; ?>

            </div>

        <?php endif; ?>


        <div class="treatment-process-layout">


            <div class="treatment-process-media">

                <?php if (! empty($args['illustration_video'])) : ?>

                    <video
                        autoplay
                        muted
                        loop
                        playsinline
                        preload="metadata">

                        <source
                            src="<?php echo esc_url($args['illustration_video']); ?>"
                            type="video/mp4">

                    </video>

                <?php elseif (! empty($args['illustration_image'])) : ?>

                    <img
                        src="<?php echo esc_url($args['illustration_image']); ?>"
                        alt="<?php echo esc_attr($args['section_title'] ?? ''); ?>"
                        loading="lazy">

                <?php endif; ?>

            </div>



            <div class="treatment-process-content">

                <?php if (
                    ! empty($args['bullet_points']) &&
                    is_array($args['bullet_points'])
                ) : ?>

                    <ul class="treatment-process-bullets">

                        <?php foreach ($args['bullet_points'] as $point) : ?>

                            <?php if (! empty($point)) : ?>

                                <li>

                                    <?php echo esc_html($point); ?>

                                </li>

                            <?php endif; ?>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>

            </div>

        </div>
    </div>

</section>