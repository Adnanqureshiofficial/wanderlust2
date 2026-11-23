
<?php
/**
 * Lumecca – Before & After Results Carousel
 *
 * Expected arguments:
 * section_tag
 * section_title
 * section_description
 * results (array)
 *   - before_image_url
 *   - after_image_url
 *   - before_image_alt
 *   - after_image_alt
 *   - caption
 * disclaimer
 */

$section_tag         = $args['section_tag'] ?? 'RESULTS';
$section_title       = $args['section_title'] ?? 'See the Difference.';
$section_description = $args['section_description'] ?? 'Real results from Lumecca IPL treatments.';
$results             = $args['results'] ?? [];
$disclaimer          = $args['disclaimer'] ?? 'Every skin journey is unique, and results may vary.';

$valid_results = array_values(array_filter($results, function ($result) {
    return !empty($result['before_image_url'])
        && !empty($result['after_image_url']);
}));

$slider_id = 'lumecca-results-' . wp_unique_id();
?>

<?php if (!empty($valid_results)) : ?>

<section class="lumecca-results section"
         id="<?php echo esc_attr($slider_id); ?>"
         data-lumecca-slider
         data-autoplay="5000">

    <div class="container">

        <!-- Section Header -->
        <div class="lumecca-results-header">

            <?php if ($section_tag) : ?>
                <span class="lumecca-results-tag">
                    <?php echo esc_html($section_tag); ?>
                </span>
            <?php endif; ?>

            <?php if ($section_title) : ?>
                <h2 class="lumecca-results-title">
                    <?php echo esc_html($section_title); ?>
                </h2>
            <?php endif; ?>

            <?php if ($section_description) : ?>
                <p class="lumecca-results-description">
                    <?php echo esc_html($section_description); ?>
                </p>
            <?php endif; ?>

        </div>


        <!-- Results Slider -->
        <div class="lumecca-results-slider">

            <div class="lumecca-results-track">

                <?php foreach ($valid_results as $index => $result) : ?>

                    <div class="lumecca-results-slide <?php echo $index === 0 ? 'is-active' : ''; ?>"
                         data-slide="<?php echo esc_attr($index); ?>"
                         aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>">

                        <div class="lumecca-results-pair">

                            <!-- Before Image -->
                            <div class="lumecca-results-image">

                                <img
                                    src="<?php echo esc_url($result['before_image_url']); ?>"
                                    alt="<?php echo esc_attr($result['before_image_alt'] ?? 'Before Lumecca IPL treatment'); ?>"
                                    loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>"
                                    <?php echo $index === 0 ? 'fetchpriority="high"' : ''; ?>
                                >

                                <span class="lumecca-results-label">
                                    Before
                                </span>

                            </div>


                            <!-- After Image -->
                            <div class="lumecca-results-image">

                                <img
                                    src="<?php echo esc_url($result['after_image_url']); ?>"
                                    alt="<?php echo esc_attr($result['after_image_alt'] ?? 'After Lumecca IPL treatment'); ?>"
                                    loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>"
                                >

                                <span class="lumecca-results-label">
                                    After
                                </span>

                            </div>

                        </div>

                        <?php if (!empty($result['caption'])) : ?>
                            <p class="lumecca-results-caption">
                                <?php echo esc_html($result['caption']); ?>
                            </p>
                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>


            <!-- Slider Controls -->
            <?php if (count($valid_results) > 1) : ?>

                <div class="lumecca-results-controls">

                    <button
                        type="button"
                        class="lumecca-results-arrow lumecca-results-prev"
                        aria-label="Previous result"
                    >
                        &#8592;
                    </button>


                    <div class="lumecca-results-dots" role="group" aria-label="Choose treatment result">

                        <?php foreach ($valid_results as $index => $result) : ?>

                            <button
                                type="button"
                                class="lumecca-results-dot <?php echo $index === 0 ? 'is-active' : ''; ?>"
                                data-goto="<?php echo esc_attr($index); ?>"
                                aria-label="<?php echo esc_attr('Show result ' . ($index + 1)); ?>"
                                aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                            ></button>

                        <?php endforeach; ?>

                    </div>


                    <button
                        type="button"
                        class="lumecca-results-arrow lumecca-results-next"
                        aria-label="Next result"
                    >
                        &#8594;
                    </button>

                </div>

            <?php endif; ?>

        </div>


        <!-- Disclaimer -->
        <?php if ($disclaimer) : ?>
            <p class="lumecca-results-disclaimer">
                <?php echo esc_html($disclaimer); ?>
            </p>
        <?php endif; ?>

    </div>

</section>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const sliders = document.querySelectorAll('[data-lumecca-slider]');

    sliders.forEach(function (slider) {

        const slides = Array.from(
            slider.querySelectorAll('.lumecca-results-slide')
        );

        const dots = Array.from(
            slider.querySelectorAll('.lumecca-results-dot')
        );

        const prevButton = slider.querySelector('.lumecca-results-prev');
        const nextButton = slider.querySelector('.lumecca-results-next');

        if (slides.length <= 1) return;

        const interval = Number(slider.dataset.autoplay) || 5000;

        const reducedMotion = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        );

        let currentIndex = 0;
        let autoplayTimer = null;
        let isPaused = false;
        let isVisible = true;


        /* Update active slide */

        function showSlide(index) {

            currentIndex = (index + slides.length) % slides.length;

            slides.forEach(function (slide, i) {

                const active = i === currentIndex;

                slide.classList.toggle('is-active', active);
                slide.setAttribute('aria-hidden', String(!active));

            });


            dots.forEach(function (dot, i) {

                const active = i === currentIndex;

                dot.classList.toggle('is-active', active);
                dot.setAttribute('aria-current', String(active));

            });

        }


        /* Autoplay */

        function stopAutoplay() {

            if (autoplayTimer) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }

        }


        function startAutoplay() {

            stopAutoplay();

            if (
                isPaused ||
                !isVisible ||
                reducedMotion.matches
            ) {
                return;
            }

            autoplayTimer = setInterval(function () {

                showSlide(currentIndex + 1);

            }, interval);

        }


        /* Manual navigation */

        function goToSlide(index) {

            showSlide(index);
            startAutoplay();

        }


        if (prevButton) {

            prevButton.addEventListener('click', function () {

                goToSlide(currentIndex - 1);

            });

        }


        if (nextButton) {

            nextButton.addEventListener('click', function () {

                goToSlide(currentIndex + 1);

            });

        }


        /* Pagination */

        dots.forEach(function (dot, index) {

            dot.addEventListener('click', function () {

                goToSlide(index);

            });

        });


        /* Pause on hover */

        slider.addEventListener('mouseenter', function () {

            isPaused = true;
            stopAutoplay();

        });


        slider.addEventListener('mouseleave', function () {

            isPaused = false;
            startAutoplay();

        });


        /* Pause while keyboard-focused */

        slider.addEventListener('focusin', function () {

            isPaused = true;
            stopAutoplay();

        });


        slider.addEventListener('focusout', function (event) {

            if (!slider.contains(event.relatedTarget)) {

                isPaused = false;
                startAutoplay();

            }

        });


        /* Pause when browser tab is hidden */

        document.addEventListener('visibilitychange', function () {

            isVisible = !document.hidden;
            startAutoplay();

        });


        /* Respect reduced motion preferences */

        reducedMotion.addEventListener('change', function () {

            startAutoplay();

        });


        /* Initial state */

        showSlide(0);
        startAutoplay();

    });

});

</script>
<?php endif; ?>
