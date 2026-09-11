<?php
/**
 * Location Video / Local SEO Section
 *
 * Expected args:
 * - heading
 * - subline
 * - video_url
 */

$heading   = $args['heading'] ?? '';
$subline   = $args['subline'] ?? '';
$video_url = $args['video_url'] ?? '';

if (!$heading || !$video_url) {
    return;
}
?>

<section class="bs-location-video" aria-labelledby="bs-location-video-title">

    <div class="container">

        <div class="bs-location-video__header">

            <h2
                id="bs-location-video-title"
                class="bs-location-video__title"
            >
                <?php echo wp_kses_post($heading); ?>
            </h2>

            <?php if ($subline) : ?>
                <p class="bs-location-video__subline">
                    <?php echo wp_kses_post($subline); ?>
                </p>
            <?php endif; ?>

        </div>


        <div class="bs-location-video__media">

            <video
                class="bs-location-video__video"
                src="<?php echo esc_url($video_url); ?>"
                autoplay
                muted
                loop
                playsinline
                preload="metadata"
                aria-label="<?php echo esc_attr($heading); ?>"
            ></video>


            <button
                type="button"
                class="bs-location-video__sound"
                aria-label="Turn sound on"
                aria-pressed="false"
            >
                <span class="bs-location-video__sound-icon bs-location-video__sound-icon--off" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M11 5L6 9H2V15H6L11 19V5Z"
                              stroke="currentColor"
                              stroke-width="1.6"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M16 9L21 15"
                              stroke="currentColor"
                              stroke-width="1.6"
                              stroke-linecap="round"/>
                        <path d="M21 9L16 15"
                              stroke="currentColor"
                              stroke-width="1.6"
                              stroke-linecap="round"/>
                    </svg>
                </span>

                <span class="bs-location-video__sound-icon bs-location-video__sound-icon--on" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M11 5L6 9H2V15H6L11 19V5Z"
                              stroke="currentColor"
                              stroke-width="1.6"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M15 9C16.3 10.3 16.3 13.7 15 15"
                              stroke="currentColor"
                              stroke-width="1.6"
                              stroke-linecap="round"/>
                        <path d="M18 6C21.5 9.5 21.5 14.5 18 18"
                              stroke="currentColor"
                              stroke-width="1.6"
                              stroke-linecap="round"/>
                    </svg>
                </span>

                <span class="bs-location-video__sound-label">
                    Sound
                </span>
            </button>

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const sections = document.querySelectorAll('.bs-location-video');

    if (!sections.length) {
        return;
    }

    sections.forEach(function (section) {

        const video = section.querySelector('.bs-location-video__video');
        const soundButton = section.querySelector('.bs-location-video__sound');

        if (!video) {
            return;
        }


        /* ---------------------------------------------
           VIEWPORT AUTOPLAY
        --------------------------------------------- */

        const observer = new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        const playPromise = video.play();

                        if (playPromise !== undefined) {
                            playPromise.catch(function () {
                                // Browser may block playback.
                                // Video remains safely muted.
                            });
                        }

                    } else {

                        video.pause();

                    }

                });

            },
            {
                threshold: 0.35
            }
        );

        observer.observe(section);


        /* ---------------------------------------------
           SOUND TOGGLE
        --------------------------------------------- */

        if (soundButton) {

            soundButton.addEventListener('click', function () {

                if (video.muted) {

                    video.muted = false;

                    soundButton.classList.add('is-unmuted');

                    soundButton.setAttribute(
                        'aria-label',
                        'Turn sound off'
                    );

                    soundButton.setAttribute(
                        'aria-pressed',
                        'true'
                    );

                } else {

                    video.muted = true;

                    soundButton.classList.remove('is-unmuted');

                    soundButton.setAttribute(
                        'aria-label',
                        'Turn sound on'
                    );

                    soundButton.setAttribute(
                        'aria-pressed',
                        'false'
                    );

                }

            });

        }

    });

});
</script>