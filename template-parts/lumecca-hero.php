
<?php
/**
 * Lumecca IPL Landing Page — Hero Section
 *
 * Expected arguments:
 * badge_text
 * heading
 * description
 * image_url
 * image_alt
 * main_cta_text
 * main_cta_url
 * trust_bullets
 * offer_title
 * offer_description
 * card_cta_text
 * card_cta_url
 */
?>

<section class="lumecca-hero section">

    <div class="container">

        <!-- Hero Image -->
        <?php if ( ! empty( $args['image_url'] ) ) : ?>
            <div class="lumecca-hero-image">
                <img
                    src="<?php echo esc_url( $args['image_url'] ); ?>"
                    alt="<?php echo esc_attr( $args['image_alt'] ?? '' ); ?>"
                    fetchpriority="high"
                >
            </div>
        <?php endif; ?>


        <div class="lumecca-hero-grid">

            <!-- Left Content -->
            <div class="lumecca-hero-left">

                <!-- Badge / Eyebrow -->
                <?php if ( ! empty( $args['badge_text'] ) ) : ?>
                    <span class="lumecca-hero-badge">
                        <?php echo esc_html( $args['badge_text'] ); ?>
                    </span>
                <?php endif; ?>


                <!-- Hero Heading -->
                <?php if ( ! empty( $args['heading'] ) ) : ?>
                    <h1>
                        <?php echo wp_kses( $args['heading'], [
                            'br'   => [],
                            'em'   => [],
                            'strong' => [],
                        ] ); ?>
                    </h1>
                <?php endif; ?>


                <!-- Hero Description -->
                <?php if ( ! empty( $args['description'] ) ) : ?>
                    <p class="lumecca-hero-description">
                        <?php echo esc_html( $args['description'] ); ?>
                    </p>
                <?php endif; ?>


       


                <!-- Trust / Benefit Bullets -->
                <?php if ( ! empty( $args['trust_bullets'] ) && is_array( $args['trust_bullets'] ) ) : ?>
                    <div class="lumecca-hero-trust">

                        <?php foreach ( $args['trust_bullets'] as $bullet ) : ?>
                            <div class="lumecca-hero-trust-item">
                                <?php echo esc_html( $bullet ); ?>
                            </div>
                        <?php endforeach; ?>

                    </div>
                <?php endif; ?>

            </div>


            <!-- Right Offer Card -->
            <div class="lumecca-hero-right">

                <div class="lumecca-offer-card">

                    <div class="lumecca-offer-inner">

                        <?php if ( ! empty( $args['offer_title'] ) ) : ?>
                            <h2>
                                <?php echo esc_html( $args['offer_title'] ); ?>
                            </h2>
                        <?php endif; ?>


                        <?php if ( ! empty( $args['offer_description'] ) ) : ?>
                            <p>
                                <?php echo esc_html( $args['offer_description'] ); ?>
                            </p>
                        <?php endif; ?>


                        <?php if ( ! empty( $args['card_cta_text'] ) && ! empty( $args['card_cta_url'] ) ) : ?>
                            <a
                                href="<?php echo esc_url( $args['card_cta_url'] ); ?>"
                                class="btn lumecca-offer-cta"
                            >
                                <?php echo esc_html( $args['card_cta_text'] ); ?>
                            </a>
                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
