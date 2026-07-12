<!-- template-parts/bs-urgency.php -->
<section class="urgency section" 
         data-target-date="<?php echo esc_attr( ! empty( $args['countdown_date'] ) ? $args['countdown_date'] : '' ); ?>">
    <div class="container">

        <!-- Section Headers -->
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
                    <?php echo wp_kses( $args['section_description'], array( 'strong' => array() ) ); ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- Static Countdown Clock Structural Blueprint -->
        <div class="countdown">
           
            <div class="time-box">
                <span id="hours">00</span>
                <small><?php echo esc_html( ! empty( $args['label_hours'] ) ? $args['label_hours'] : 'HOURS' ); ?></small>
            </div>
            <div class="time-box">
                <span id="minutes">00</span>
                <small><?php echo esc_html( ! empty( $args['label_minutes'] ) ? $args['label_minutes'] : 'MINUTES' ); ?></small>
            </div>
            <div class="time-box">
                <span id="seconds">00</span>
                <small><?php echo esc_html( ! empty( $args['label_seconds'] ) ? $args['label_seconds'] : 'SECONDS' ); ?></small>
            </div>
        </div>

        <!-- Action Processing Hook -->
        <div class="btn-center">
            <a href="<?php echo esc_attr( $args['cta_url'] ); ?>" class="btn urgency-btn">
                <?php echo esc_html( $args['cta_text'] ); ?>
            </a>
        </div>

    </div>
</section>
