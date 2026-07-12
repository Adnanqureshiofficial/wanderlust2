    <?php
/**
 * template-parts/bs-pricing-offer.php
 */
?>

<section class="pricing-offer section">

    <div class="container">

        <div class="section-header">

            <?php if ( ! empty( $args['section_tag'] ) ) : ?>
                <span class="section-tag">
                    <?php echo esc_html( $args['section_tag'] ); ?>
                </span>
            <?php endif; ?>

            <h2 class="section-title">
                <?php echo esc_html( $args['section_title'] ); ?>
            </h2>

            <?php if ( ! empty( $args['section_description'] ) ) : ?>
                <p class="section-description">
                    <?php echo esc_html( $args['section_description'] ); ?>
                </p>
            <?php endif; ?>

        </div>

        <div class="pricing-card">

            <div class="pricing-inner">

                <div class="pricing-row">

                    <div class="pricing-column">

                        <small>Regular Price</small>

                        <div class="old-price">
                            <?php echo esc_html( $args['regular_price'] ); ?>
                        </div>

                    </div>

                    <div class="pricing-divider"></div>

                    <div class="pricing-column">

                        <small>Today's Offer</small>

                        <div class="offer-price">
                            <?php echo esc_html( $args['offer_price'] ); ?>
                        </div>

                    </div>

                </div>

                <?php if ( ! empty( $args['offer_note'] ) ) : ?>

                    <p class="pricing-note">

                        <?php echo esc_html( $args['offer_note'] ); ?>

                    </p>

                <?php endif; ?>

                <a
                    href="<?php echo esc_url( $args['cta_url'] ); ?>"
                    class="btn pricing-btn">

                    <?php echo esc_html( $args['cta_text'] ); ?>

                </a>

            </div>

        </div>

    </div>

</section>