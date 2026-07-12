<!-- template-parts/bs-trust.php -->
<section class="trust section">
    <div class="container">
        
        <?php if ( ! empty( $args['columns'] ) && is_array( $args['columns'] ) ) : ?>
            <div class="trust-grid">
                <?php foreach ( $args['columns'] as $column ) : ?>
                    <div class="trust-card">
                        
                        <?php if ( ! empty( $column['section_tag'] ) ) : ?>
                            <span class="section-tag">
                                <?php echo esc_html( $column['section_tag'] ); ?>
                            </span>
                        <?php endif; ?>

                        <h2 class="section-title">
                            <?php echo wp_kses( $column['section_title'], array( 'br' => array() ) ); ?>
                        </h2>

                        <?php if ( ! empty( $column['trust_list'] ) && is_array( $column['trust_list'] ) ) : ?>
                            <ul class="trust-list">
                                <?php foreach ( $column['trust_list'] as $item ) : ?>
                                    <li><?php echo esc_html( $item ); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <!-- Dynamic Button with Custom CSS Classes -->
                        <a href="<?php echo esc_attr( $column['cta_url'] ); ?>" class="<?php echo esc_attr( $column['cta_class'] ); ?>">
                            <?php echo esc_html( $column['cta_text'] ); ?>
                        </a>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
