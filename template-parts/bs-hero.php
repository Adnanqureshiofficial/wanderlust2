<!-- template-parts/bs-hero.php -->
<section class="hero section">
    <div class="container hero-grid">
        <div class="hero-left">
            <!-- Badge Text -->
            <?php if ( ! empty( $args['badge_text'] ) ) : ?>
                <span class="badge">
                    <?php echo esc_html( $args['badge_text'] ); ?>
                </span>
            <?php endif; ?>

            <!-- Hero Heading (Allows <em> or <br> tags via wp_kses) -->
            <h1 id="lip_filler_hero">
                <?php echo wp_kses( $args['heading'], array( 'br' => array(), 'em' => array() ) ); ?>
            </h1>

            <!-- Hero Description -->
            <p>
                <?php echo esc_html( $args['description'] ); ?>
            </p>

            <!-- Main CTA Button -->
            <a href="<?php echo esc_attr( $args['main_cta_url'] ); ?>" class="btn">
                <?php echo esc_html( $args['main_cta_text'] ); ?>
            </a>

            <!-- Voucher Alert Text -->
            <div class="voucher-text">
                <?php 
                // Uses wp_kses to preserve the inner <span> structure
                echo wp_kses( $args['voucher_text'], array( 'span' => array() ) ); 
                ?>
            </div>

            <!-- Trust Bullets Loop -->
            <?php if ( ! empty( $args['trust_bullets'] ) && is_array( $args['trust_bullets'] ) ) : ?>
                <div class="hero-trust">
                    <?php foreach ( $args['trust_bullets'] as $bullet ) : ?>
                        <div>• <?php echo esc_html( $bullet ); ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

      <div class="hero-right">

    <?php
    $has_offer_card =
        ! empty( $args['package_title'] ) ||
        ! empty( $args['package_subtitle'] ) ||
        ! empty( $args['pricing_tiers'] ) ||
        ! empty( $args['package_features'] ) ||
        ! empty( $args['card_cta_text'] );
    ?>

    <?php if ( $has_offer_card ) : ?>

        <div class="offer-card">

            <div class="offer-inner">

                <!-- Package Title -->
                <?php if ( ! empty( $args['package_title'] ) ) : ?>

                    <h2>

                        <?php echo esc_html( $args['package_title'] ); ?>

                    </h2>

                <?php endif; ?>


                <!-- Package Subtitle -->
                <?php if ( ! empty( $args['package_subtitle'] ) ) : ?>

                    <small>

                        <?php echo esc_html( $args['package_subtitle'] ); ?>

                    </small>

                <?php endif; ?>


                <!-- Pricing -->
                <?php if ( ! empty( $args['pricing_tiers'] ) && is_array( $args['pricing_tiers'] ) ) : ?>

                    <?php foreach ( $args['pricing_tiers'] as $tier ) : ?>

                        <div class="price-row">

                            <?php if ( ! empty( $tier['label'] ) ) : ?>

                                <span>

                                  <?php
        echo wp_kses(
            $tier['label'],
            array(
                'br'     => array(),
                'span'   => array(
                    'class' => true,
                    'style' => true,
                ),
                'strong' => array(),
                'em'     => array(),
                'small'  => array(),
                 's'      => array(),
            )
        );
        ?>


                                </span>

                            <?php endif; ?>

                            <?php if ( ! empty( $tier['price'] ) ) : ?>

                                <strong class="offer-card-price">

                                   <?php
        echo wp_kses(
            $tier['price'],
            array(
                'br'     => array(),
                'span'   => array(
                    'class' => true,
                    'style' => true,
                ),
                'strong' => array(),
                'em'     => array(),
                'small'  => array(),
                 's'      => array(),
            )
        );
        ?>

                                </strong>

                            <?php endif; ?>

                        </div>

                    <?php endforeach; ?>

                <?php endif; ?>


                <!-- Features -->
                <?php if ( ! empty( $args['package_features'] ) && is_array( $args['package_features'] ) ) : ?>

                    <ul>

                        <?php foreach ( $args['package_features'] as $feature ) : ?>

                            <?php if ( ! empty( $feature ) ) : ?>

                                <li>

                                    <?php echo esc_html( $feature ); ?>

                                </li>

                            <?php endif; ?>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>


                <!-- CTA -->
                <?php if ( ! empty( $args['card_cta_text'] ) ) : ?>

                    <a
                        href="<?php echo esc_url( ! empty( $args['card_cta_url'] ) ? $args['card_cta_url'] : '#' ); ?>"
                        class="claim-btn">

                        <?php echo esc_html( $args['card_cta_text'] ); ?>

                    </a>

                <?php endif; ?>

            </div>

        </div>

    <?php endif; ?>

</div>
    </div>
</section>
