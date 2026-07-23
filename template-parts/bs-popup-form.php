<!-- template-parts/bs-popup-form.php -->
<div id="bs-popup-overlay" class="bs-popup-overlay">

    <div class="bs-popup">

        <button
            type="button"
            class="bs-popup-close"
            aria-label="Close Popup">

            &times;

        </button>

        <div class="bs-popup-header">

           <?php if ( ! empty( $args['section_tag'] ) ) : ?>

    <span class="section-tag">

        <?php echo esc_html( $args['section_tag'] ); ?>

    </span>

<?php endif; ?>


<?php if ( ! empty( $args['popup_title'] ) ) : ?>

    <h2>

        <?php echo esc_html( $args['popup_title'] ); ?>

    </h2>

<?php endif; ?>


<?php if ( ! empty( $args['popup_description'] ) ) : ?>

    <p>

        <?php echo esc_html( $args['popup_description'] ); ?>

    </p>

<?php endif; ?>

        </div>

        <div class="bs-popup-body">

            <div class="cta-card">

                <div class="cta-inner">

                    <?php if ( ! empty( $args['form_shortcode'] ) ) : ?>

                        <div class="bs-form-container">

                            <?php echo do_shortcode( $args['form_shortcode'] ); ?>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</div>