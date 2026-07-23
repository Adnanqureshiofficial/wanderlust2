<?php
if ( empty( $args ) ) {
    return;
}
?>
 <?php if ( ! empty( $args['offer_headline'] ) ) : ?>

            <div class="hero-banner-headline">

                <?php echo esc_html( $args['offer_headline'] ); ?>

            </div>

        <?php endif; ?>
<section class="bs-hero-banner container">

    <div class="hero-container">

       


        <?php if ( ! empty( $args['image'] ) ) : ?>

            <div class="hero-banner-image">

                <img
                    src="<?php echo esc_url( $args['image'] ); ?>"
                    alt="<?php echo esc_attr( $args['image_alt'] ?? '' ); ?>"
                    loading="lazy">

            </div>

        <?php endif; ?>

    </div>

</section>