<!-- template-parts/bs-hero.php -->

<section class="hero section">

    <div class="container hero-grid">

        <!-- =====================================
             LEFT CONTENT
        ====================================== -->

        <div class="hero-left">

            <?php if (!empty($args['badge_text'])) : ?>

                <span class="badge">

                    <?php echo esc_html($args['badge_text']); ?>

                </span>

            <?php endif; ?>


            <?php if (!empty($args['heading'])) : ?>

                <h1>

                    <?php
                    echo wp_kses(
                        $args['heading'],
                        [
                            'br' => [],
                            'em' => [],
                            'strong' => [],
                            'span' => [
                                'class' => true
                            ]
                        ]
                    );
                    ?>

                </h1>

            <?php endif; ?>


            <?php if (!empty($args['description'])) : ?>

                <p class="hero-description">

                    <?php echo esc_html($args['description']); ?>

                </p>

            <?php endif; ?>


            <?php if (!empty($args['support_text'])) : ?>

                <div class="hero-support">

                    <?php echo esc_html($args['support_text']); ?>

                </div>

            <?php endif; ?>


            <?php if (!empty($args['main_cta_text'])) : ?>

                <a
                    href="<?php echo esc_url($args['main_cta_url']); ?>"
                    class="btn">

                    <?php echo esc_html($args['main_cta_text']); ?>

                </a>

            <?php endif; ?>


            <?php if (!empty($args['trust_bullets']) && is_array($args['trust_bullets'])) : ?>

                <div class="hero-trust">

                    <?php foreach ($args['trust_bullets'] as $bullet) : ?>

                        <div class="trust-item">

                            ✓ <?php echo esc_html($bullet); ?>

                        </div>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>


        <!-- =====================================
             RIGHT CARD
        ====================================== -->

        <?php if (!empty($args['card'])) :

            $card = $args['card'];

        ?>

            <div class="hero-right">

                <div class="offer-card">

                    <div class="offer-inner">

                        <?php if (!empty($card['title'])) : ?>

                            <h2>

                                <?php echo esc_html($card['title']); ?>

                            </h2>

                        <?php endif; ?>


                        <?php if (!empty($card['subtitle'])) : ?>

                            <small>

                                <?php echo esc_html($card['subtitle']); ?>

                            </small>

                        <?php endif; ?>


                        <?php if (!empty($card['pricing']) && is_array($card['pricing'])) : ?>

                            <?php foreach ($card['pricing'] as $tier) : ?>

                                <div class="price-row">

                                    <div class="price-left">

                                        <span class="price-label">

                                            <?php
                                            echo wp_kses(
                                                $tier['label'],
                                                [
                                                    'br' => [],
                                                    'strong' => [],
                                                    'em' => [],
                                                    'span' => [
                                                        'class' => true
                                                    ]
                                                ]
                                            );
                                            ?>

                                        </span>

                                        <?php if (!empty($tier['regular_price'])) : ?>

                                            <small class="old-price">

                                                Regularly <?php echo esc_html($tier['regular_price']); ?>

                                            </small>

                                        <?php endif; ?>

                                    </div>


                                    <strong class="offer-card-price">

                                        <?php echo esc_html($tier['price']); ?>

                                    </strong>

                                </div>

                            <?php endforeach; ?>

                        <?php endif; ?>


                        <?php if (!empty($card['cta_text'])) : ?>

                            <a
                                href="<?php echo esc_url($card['cta_url']); ?>"
                                class="claim-btn">

                                <?php echo esc_html($card['cta_text']); ?>

                            </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        <?php endif; ?>

    </div>

</section>