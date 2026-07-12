<!-- template-parts/bs-faq.php -->
<section class="faq section">
    <div class="container">

        <!-- Header Controls -->
        <div class="section-header">
            <?php if ( ! empty( $args['section_tag'] ) ) : ?>
                <span class="section-tag">
                    <?php echo esc_html( $args['section_tag'] ); ?>
                </span>
            <?php endif; ?>

            <h2 class="section-title">
                <?php echo esc_html( $args['section_title'] ); ?>
            </h2>
        </div>

        <!-- Dynamic Accordion Loop -->
        <?php if ( ! empty( $args['faq_items'] ) && is_array( $args['faq_items'] ) ) : ?>
            <div class="faq-wrapper">
                <?php foreach ( $args['faq_items'] as $index => $item ) : 
                    // Add 'active' class to the first item automatically if requested, or keep all closed
                    $is_first_active = ($index === 0 && ! empty($args['open_first'])) ? ' active' : '';
                ?>
                    <div class="faq-item<?php echo esc_attr( $is_first_active ); ?>">
                        
                        <button class="faq-question">
                            <span><?php echo esc_html( $item['question'] ); ?></span>
                            <span class="faq-icon">+</span>
                        </button>

                        <div class="faq-answer">
                            <p>
                                <?php echo esc_html( $item['answer'] ); ?>
                            </p>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
