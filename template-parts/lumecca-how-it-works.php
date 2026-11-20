
<?php
/**
 * Lumecca IPL — How It Works Section
 *
 * Expected arguments:
 * section_tag
 * section_title
 * section_description
 * process_title
 * treatment_image_url
 * treatment_image_alt
 * steps
 */
?>

<section class="lumecca-how section">

    <div class="container">

        <div class="lumecca-how-grid">

            <!-- Left Content -->
            <div class="lumecca-how-content">

                <!-- Section Tag -->
                <?php if ( ! empty( $args['section_tag'] ) ) : ?>
                    <span class="lumecca-how-tag">
                        <?php echo esc_html( $args['section_tag'] ); ?>
                    </span>
                <?php endif; ?>


                <!-- Section Heading -->
                <?php if ( ! empty( $args['section_title'] ) ) : ?>
                    <h2>
                        <?php echo wp_kses( $args['section_title'], [
                            'br'     => [],
                            'em'     => [],
                            'strong' => [],
                        ] ); ?>
                    </h2>
                <?php endif; ?>


                <!-- Section Description -->
                <?php if ( ! empty( $args['section_description'] ) ) : ?>
                    <p class="lumecca-how-description">
                        <?php echo esc_html( $args['section_description'] ); ?>
                    </p>
                <?php endif; ?>


                <!-- Process Steps -->
                <div class="lumecca-how-process">

                    <?php if ( ! empty( $args['process_title'] ) ) : ?>
                        <h3>
                            <?php echo esc_html( $args['process_title'] ); ?>
                        </h3>
                    <?php endif; ?>


                    <?php if ( ! empty( $args['steps'] ) && is_array( $args['steps'] ) ) : ?>

                        <div class="lumecca-how-steps">

                            <?php foreach ( $args['steps'] as $step ) : ?>

                                <div class="lumecca-how-step">

                                    <!-- Step Number -->
                                    <?php if ( ! empty( $step['number'] ) ) : ?>
                                        <span class="lumecca-how-step-number">
                                            <?php echo esc_html( $step['number'] ); ?>
                                        </span>
                                    <?php endif; ?>


                                    <!-- Step Content -->
                                    <div class="lumecca-how-step-content">

                                        <?php if ( ! empty( $step['title'] ) ) : ?>
                                            <h4>
                                                <?php echo esc_html( $step['title'] ); ?>
                                            </h4>
                                        <?php endif; ?>


                                        <?php if ( ! empty( $step['description'] ) ) : ?>
                                            <p>
                                                <?php echo esc_html( $step['description'] ); ?>
                                            </p>
                                        <?php endif; ?>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>

                </div>

            </div>


            <!-- Right Treatment Image -->
            <?php if ( ! empty( $args['treatment_image_url'] ) ) : ?>

                <div class="lumecca-how-image">

                    <img
                        src="<?php echo esc_url( $args['treatment_image_url'] ); ?>"
                        alt="<?php echo esc_attr( $args['treatment_image_alt'] ?? '' ); ?>"
                        loading="lazy"
                    >

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>
