<section class="section image-slider-section">

    <div class="container social-grid">

        <!-- Image Slider -->
        <div class="social-slider">

            <?php if ( ! empty( $args['image_slider'] ) && is_array( $args['image_slider'] ) ) : ?>

                <div class="slider-track">

                    <?php foreach ( $args['image_slider'] as $image ) : ?>

                        <div class="slide">

                            <img
                                src="<?php echo esc_url( $image ); ?>"
                                loading="lazy"
                                alt="">

                        </div>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>


        <!-- Right Content -->
        <div class="social-content">

            <?php if ( ! empty( $args['section_tag'] ) ) : ?>

                <span class="section-tag">

                    <?php echo esc_html( $args['section_tag'] ); ?>

                </span>

            <?php endif; ?>


            <?php if ( ! empty( $args['section_title'] ) ) : ?>

                <h2 class="section-title">

                    <?php
                    echo wp_kses(
                        $args['section_title'],
                        [
                            'br' => [],
                            'em' => [],
                            'strong' => []
                        ]
                    );
                    ?>

                </h2>

            <?php endif; ?>


            <?php if ( ! empty( $args['content'] ) ) : ?>

                <div class="social-text">

                    <?php

                    if ( is_array( $args['content'] ) ) :

                        foreach ( $args['content'] as $paragraph ) :

                    ?>

                            <p><?php echo esc_html( $paragraph ); ?></p>

                    <?php

                        endforeach;

                    else :

                    ?>

                        <p><?php echo esc_html( $args['content'] ); ?></p>

                    <?php endif; ?>

                </div>

            <?php endif; ?>


            <?php if ( ! empty( $args['sign_list'] ) ) : ?>

                <ul class="sign-list">

                    <?php foreach ( $args['sign_list'] as $item ) : ?>

                        <li class="sign_list_items">

                            <!-- Your SVG -->

                            <div><?php echo esc_html( $item ); ?></div>

                        </li>

                    <?php endforeach; ?>

                </ul>

            <?php endif; ?>


            <?php if ( ! empty( $args['cta_text'] ) ) : ?>

                <a
                    href="<?php echo esc_url( $args['cta_url'] ); ?>"
                    class="btn">

                    <?php echo esc_html( $args['cta_text'] ); ?>

                </a>

            <?php endif; ?>

        </div>

    </div>

</section>