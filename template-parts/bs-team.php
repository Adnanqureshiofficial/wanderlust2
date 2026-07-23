<section class="bs-team section">

    <div class="container">

        <?php if (
            ! empty($args['section_tag']) ||
            ! empty($args['section_title']) ||
            ! empty($args['section_description'])
        ) : ?>

            <div class="section-header">

                <?php if (!empty($args['section_tag'])) : ?>

                    <span class="section-tag">

                        <?php echo esc_html($args['section_tag']); ?>

                    </span>

                <?php endif; ?>

                <?php if (!empty($args['section_title'])) : ?>

                    <h2 class="section-title">

                        <?php echo esc_html($args['section_title']); ?>

                    </h2>

                <?php endif; ?>

                <?php if (!empty($args['section_description'])) : ?>

                    <p class="section-description">

                        <?php echo esc_html($args['section_description']); ?>

                    </p>

                <?php endif; ?>

            </div>

        <?php endif; ?>


        <?php if (!empty($args['members'])) : ?>

            <div class="team-grid">

                <?php foreach ($args['members'] as $member) : ?>

                    <div class="team-card">

                        <?php if (!empty($member['image'])) : ?>

                            <img
                                src="<?php echo esc_url($member['image']); ?>"
                                alt="<?php echo esc_attr($member['name']); ?>"
                                loading="lazy">

                        <?php endif; ?>

                        <div class="team-overlay"></div>

                        <div class="team-content">

                            <?php if (!empty($member['name'])) : ?>

                                <h3>

                                    <?php echo esc_html($member['name']); ?>

                                </h3>

                            <?php endif; ?>


                            <?php if (!empty($member['designation'])) : ?>

                                <p>

                                    <?php echo esc_html($member['designation']); ?>

                                </p>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>