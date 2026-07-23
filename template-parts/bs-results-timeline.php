<?php
/**
 * template-parts/bs-results-timeline.php
 */
?>

<section class="results-timeline section">

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

        <?php if ( ! empty( $args['timeline_items'] ) && is_array( $args['timeline_items'] ) ) : ?>

            <div class="timeline">

                <?php foreach ( $args['timeline_items'] as $index => $item ) : ?>

                    <div class="timeline-item">

                        <div class="timeline-marker">

                            <div class="timeline-icon">

                                <?php echo esc_html(
                                    ! empty( $item['icon'] )
                                        ? $item['icon']
                                        : '✓'
                                ); ?>

                            </div>

                            <?php if ( $index < count( $args['timeline_items'] ) - 1 ) : ?>

                                <div class="timeline-line"></div>

                            <?php endif; ?>

                        </div>

                        <div class="timeline-content">

                            <span class="timeline-day">

                                <?php echo esc_html( $item['day'] ); ?>

                            </span>

                            <h3>

                                <?php echo esc_html( $item['title'] ); ?>

                            </h3>

                            <p>

                                <?php echo esc_html( $item['description'] ); ?>

                            </p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>
        <?php if ( ! empty( $args['bottom_badge'] ) ) : ?>

<div class="timeline-badge">

    <?php echo esc_html( $args['bottom_badge'] ); ?>

</div>

<?php endif; ?>

    </div>

</section>