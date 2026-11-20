
<?php
/**
 * Lumecca IPL — Problem / Skin Concerns Section
 *
 * Expected arguments:
 * section_tag
 * section_title
 * section_description
 * cards
 * bottom_text
 */
?>

<section class="lumecca-problem section">

    <div class="container">

        <!-- Section Heading -->
        <div class="lumecca-problem-header">

            <?php if ( ! empty( $args['section_tag'] ) ) : ?>
                <span class="lumecca-problem-tag">
                    <?php echo esc_html( $args['section_tag'] ); ?>
                </span>
            <?php endif; ?>

<br>
            <?php if ( ! empty( $args['section_title'] ) ) : ?>
                <h class = "lumecca-problem-title">
                    <?php echo wp_kses( $args['section_title'], [
                        'br'     => [],
                        'em'     => [],
                        'strong' => [],
                    ] ); ?>
                </h>
            <?php endif; ?>


            <?php if ( ! empty( $args['section_description'] ) ) : ?>
                <p>
                    <?php echo esc_html( $args['section_description'] ); ?>
                </p>
            <?php endif; ?>

        </div>


        <!-- Skin Concern Cards -->
        <?php if ( ! empty( $args['cards'] ) && is_array( $args['cards'] ) ) : ?>

            <div class="lumecca-problem-grid">

                <?php foreach ( $args['cards'] as $card ) : ?>

                    <div class="lumecca-problem-card">

                        <!-- Card Image -->
                        <?php if ( ! empty( $card['image_url'] ) ) : ?>
                            <div class="lumecca-problem-card-image">

                                <img
                                    src="<?php echo esc_url( $card['image_url'] ); ?>"
                                    alt="<?php echo esc_attr( $card['image_alt'] ?? '' ); ?>"
                                    loading="lazy"
                                >

                            </div>
                        <?php endif; ?>


                        <!-- Card Content -->
                        <div class="lumecca-problem-card-content">

                            <?php if ( ! empty( $card['number'] ) ) : ?>
                                <span class="lumecca-problem-card-number">
                                    <?php echo esc_html( $card['number'] ); ?>
                                </span>
                            <?php endif; ?>


                            <?php if ( ! empty( $card['title'] ) ) : ?>
                                <h3>
                                    <?php echo esc_html( $card['title'] ); ?>
                                </h3>
                            <?php endif; ?>


                            <?php if ( ! empty( $card['description'] ) ) : ?>
                                <p>
                                    <?php echo esc_html( $card['description'] ); ?>
                                </p>
                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>


        <!-- Bottom Transition Text -->
        <?php if ( ! empty( $args['bottom_text'] ) ) : ?>

            <div class="lumecca-problem-bottom">

                <p>
                    <?php echo esc_html( $args['bottom_text'] ); ?>
                </p>

            </div>

        <?php endif; ?>

    </div>

</section>
