<!-- template-parts/bs-trust.php -->
<?php if ( ! empty( $args['columns'] ) && is_array( $args['columns'] ) ) : ?>
    <div class="trust-grid">

        <?php foreach ( $args['columns'] as $index => $column ) : ?>

            <?php if ( $index === 0 ) : ?>

                <div class="trust-chat-card"  style="background-image: url('<?php echo esc_url( $args['chat_background'] ); ?>');">

                    <div class="trust-chat-overlay">

                        <?php if ( ! empty( $column['section_tag'] ) ) : ?>
                            <span class="section-tag">
                                <?php echo esc_html( $column['section_tag'] ); ?>
                            </span>
                        <?php endif; ?>

                        <h2 class="section-title">
                            <?php echo wp_kses( $column['section_title'], ['br' => []] ); ?>
                        </h2>

                        <?php if ( ! empty( $column['trust_list'] ) ) : ?>

                            <div class="chat-points">

                                <?php foreach ( $column['trust_list'] as $i => $item ) : ?>

                                    <div class="chat-row <?php echo ( $i % 2 === 0 ) ? 'left' : 'right'; ?>">

                                        <div class="chat-bubble">
                                            <?php echo esc_html( $item ); ?>
                                        </div>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            <?php else : ?>

                <div class="trust-card">

                    <?php if ( ! empty( $column['section_tag'] ) ) : ?>
                        <span class="section-tag">
                            <?php echo esc_html( $column['section_tag'] ); ?>
                        </span>
                    <?php endif; ?>

                    <h2 class="section-title">
                        <?php echo wp_kses( $column['section_title'], ['br' => []] ); ?>
                    </h2>

                    <?php if ( ! empty( $column['trust_list'] ) ) : ?>
                        <ul class="trust-list">
                            <?php foreach ( $column['trust_list'] as $item ) : ?>
                                <li><?php echo esc_html( $item ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <a href="<?php echo esc_url( $column['cta_url'] ); ?>"
                       class="<?php echo esc_attr( $column['cta_class'] ); ?>">
                        <?php echo esc_html( $column['cta_text'] ); ?>
                    </a>

                </div>

            <?php endif; ?>

        <?php endforeach; ?>

    </div>
<?php endif; ?>
