<div class="container">

    <div class="section-header">

        <?php if ( ! empty( $section_tag ) ) : ?>
            <span class="section-tag">
                <?php echo esc_html( $section_tag ); ?>
            </span>
        <?php endif; ?>

        <?php if ( ! empty( $section_title ) ) : ?>
            <h2 class="section-title">
                <?php echo esc_html( $section_title ); ?>
            </h2>
        <?php endif; ?>

        <?php if ( ! empty( $section_description ) ) : ?>
            <p class="section-description">
                <?php echo esc_html( $section_description ); ?>
            </p>
        <?php endif; ?>

    </div>

    <div class="treatment-areas-wrapper">

        <?php if ( ! empty( $areas ) && is_array( $areas ) ) : ?>

            <div class="treatment-areas-list">

                <ul>

                    <?php foreach ( $areas as $area ) : ?>

                        <li><?php echo esc_html( $area ); ?></li>

                    <?php endforeach; ?>

                </ul>

            </div>

        <?php endif; ?>


        <?php if ( ! empty( $image_url ) ) : ?>

            <div class="treatment-areas-image">

                <img
                    src="<?php echo esc_url( $image_url ); ?>"
                    alt="<?php echo esc_attr( $image_alt ?? '' ); ?>">

            </div>

        <?php endif; ?>

    </div>

</div>