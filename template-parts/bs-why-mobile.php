<!-- template-parts/bs-why-mobile.php -->
<section class="why-mobile section">
    <div class="container">
        <!-- Section Heading Layout -->
        <div class="section-heading">
            <?php if ( ! empty( $args['section_badge'] ) ) : ?>
                <span class="section-tag">
                    <?php echo esc_html( $args['section_badge'] ); ?>
                </span>
            <?php endif; ?>

            <h2>
                <?php echo esc_html( $args['section_title'] ); ?>
            </h2>

            <?php if ( ! empty( $args['section_subtitle'] ) ) : ?>
                <p>
                    <?php echo esc_html( $args['section_subtitle'] ); ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- Dynamic Grid Content Loop -->
        <?php if ( ! empty( $args['cards'] ) && is_array( $args['cards'] ) ) : ?>
            <div class="why-grid">
                <?php foreach ( $args['cards'] as $card ) : ?>
                    <article class="why-card">
                        <span class="card-number">
                            <?php echo esc_html( $card['number'] ); ?>
                        </span>
                        <h3>
                            <?php echo esc_html( $card['title'] ); ?>
                        </h3>
                        <p>
                            <?php echo esc_html( $card['description'] ); ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
