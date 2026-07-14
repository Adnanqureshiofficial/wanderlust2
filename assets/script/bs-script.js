const menuToggle = document.querySelector(".menu-toggle");
const mobileMenu = document.querySelector(".mobile-menu");
const closeBtn = document.querySelector(".menu-close");

function openMenu() {
    mobileMenu.classList.add("active");
    menuToggle.classList.add("active");
    document.body.style.overflow = "hidden";
}

function closeMenu() {
    mobileMenu.classList.remove("active");
    menuToggle.classList.remove("active");
    document.body.style.overflow = "";
}

menuToggle.addEventListener("click", () => {

    if (mobileMenu.classList.contains("active")) {
        closeMenu();
    } else {
        openMenu();
    }

});

closeBtn.addEventListener("click", closeMenu);

document.querySelectorAll(".mobile-menu a").forEach(link => {

    link.addEventListener("click", closeMenu);

});


/*=========================================
        REPEATING 24-HOUR COUNTDOWN
=========================================*/
// Countdown duration (24 hours)
const COUNTDOWN_DURATION = 10 * 60 * 1000; // 10 minutes
document.addEventListener("DOMContentLoaded", () => {
    // 1. DEFENSIVE CHECK: Verify the container element exists on the active page
    const urgencyContainer = document.querySelector(".urgency");
    if (!urgencyContainer) return; // Exit execution safely if the component is missing

    // 2. Fetch specific countdown DOM nodes inside the wrapper
    const hoursEl = document.getElementById("hours");
    const minutesEl = document.getElementById("minutes");
    const secondsEl = document.getElementById("seconds");
    const daysEl = document.getElementById("days"); // Added in case your layout shows days

    // If critical elements are missing inside the existing component, abort execution
    if ( !minutesEl || !secondsEl) return;

    // 3. Look up or create the rolling persistent target time
    let targetTime = localStorage.getItem("countdownTarget");

    if (!targetTime || new Date().getTime() >= Number(targetTime)) {
        targetTime = new Date().getTime() + COUNTDOWN_DURATION;
        localStorage.setItem("countdownTarget", targetTime);
    }

    targetTime = Number(targetTime);

    // 4. Time Calculation Worker Function
    function updateCountdown() {
        const now = new Date().getTime();
        let distance = targetTime - now;

        // Restart automatically on expiry
        if (distance <= 0) {
            targetTime = new Date().getTime() + COUNTDOWN_DURATION;
            localStorage.setItem("countdownTarget", targetTime);
            distance = COUNTDOWN_DURATION;
        }

       // Calculate minutes and seconds
const minutes = Math.floor(distance / (1000 * 60));
const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (hoursEl) {
    hoursEl.textContent = "00";
}

minutesEl.textContent = String(minutes).padStart(2, "0");
secondsEl.textContent = String(seconds).padStart(2, "0");

if (daysEl) {
    daysEl.textContent = "00";
}

        // Set days to 00 if element exists, since your calculation rolls into hours
        if (daysEl) {
            daysEl.textContent = "00";
        }
    }

    // 5. Fire initial calculation and spin up interval loop ticker
    updateCountdown();
    setInterval(updateCountdown, 1000);
});


/*=========================================
            FAQ ACCORDION
=========================================*/

const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {

    const button = item.querySelector(".faq-question");

    button.addEventListener("click", () => {

        const isOpen = item.classList.contains("active");

        faqItems.forEach(faq => {

            faq.classList.remove("active");

        });

        if (!isOpen) {

            item.classList.add("active");

        }

    });

});



// Image SLider

const track = document.querySelector('.slider-track');

if (track) {

    const slides = track.children;

    let index = 0;

    setInterval(() => {

        index++;

        if (index >= slides.length) {

            index = 0;

        }

        track.style.transform = `translateX(-${index * 100}%)`;

    }, 3000);

}


// Image Slider For Before And After

const sliders = document.querySelectorAll(".results-slider");

sliders.forEach(slider => {

    const track = slider.querySelector(".results-track");
    const slides = slider.querySelectorAll(".result-slide");
    const toggle = slider.querySelector(".slider-toggle");

    let index = 0;
    let isPlaying = true;

    function nextSlide() {

        index++;

        if (index >= slides.length) {
            index = 0;
        }

        track.style.transform = `translateX(-${index * 100}%)`;
    }

    let interval = setInterval(nextSlide, 3500);

    toggle.addEventListener("click", () => {

        if (isPlaying) {

            clearInterval(interval);

            toggle.textContent = "▶";

            toggle.setAttribute("aria-label", "Play Slideshow");

        } else {

            interval = setInterval(nextSlide, 3500);

            toggle.textContent = "| |";

            toggle.setAttribute("aria-label", "Pause Slideshow");

        }

        isPlaying = !isPlaying;

    });

});

// Social proof and Patient Story Sound Toggle Logic for Video  
document.querySelectorAll('.social-video').forEach(container => {

    const video = container.querySelector('.testimonial-video');
    const button = container.querySelector('.video-sound-toggle');

    if (!video || !button) return;

    button.addEventListener('click', () => {

        video.muted = !video.muted;

        button.textContent = video.muted ? '🔇' : '🔊';

    });

});


/**
 * Contact Form 7 → OptiMantra Redirect
 * Fires only after successful form submission.
 */

function formatOptiMantraPhone(phone) {

    // Remove everything except digits
    let digits = phone.replace(/\D/g, '');

    // If user entered 10 digits, prepend US country code
    if (digits.length === 10) {
        digits = '1' + digits;
    }

    // Validate
    if (digits.length !== 11) {
        return null;
    }

    // Format as 198-765-4321
    return `${digits.substring(0,3)}-${digits.substring(3,6)}-${digits.substring(6)}`;
}


document.addEventListener('wpcf7submit', function (event) {

    // Convert CF7 input array into an object
    const formData = {};

    event.detail.inputs.forEach(function (input) {
        formData[input.name] = input.value;
    });

    // Retrieve submitted values
    const firstName = formData['first-name'] || '';
    const lastName  = formData['last-name'] || '';
    const email     = formData['email'] || '';
    const phone = formatOptiMantraPhone(formData['phone']) || '';

    // Build OptiMantra URL
    const bookingUrl =
        'https://www.optimantra.com/optimus/patient/patientaccess/practsNslotsNEW'
        + '?sid=' + encodeURIComponent('bHFYVFI0MTR6elQyS0VidU1jcGxHZz09')
        + '&pid=' + encodeURIComponent('VWVvNEFOMlZpRFpKSUVnRDhzT2N3UT09')
        + '&lid=' + encodeURIComponent('RnNvSVQ3YXVEOVlkZndOc25xanBCQT09')
        + '&first=' + encodeURIComponent(firstName)
        + '&last=' + encodeURIComponent(lastName)
        + '&email=' + encodeURIComponent(email)
         + '&ph=' + encodeURIComponent(phone)
        + '&addOnSids='
        + '&additionalReqParamJson='
        + '&address='
        + '&city='
        + '&comments='
        + '&dob='
        + '&hideFooterInFrame='
        + '&hideHeaderInFrame='
        + '&isMobileApp='
        + '&selPatId='
        + '&src='
        + '&srcid='
        + '&state='
        + '&uid='
        + '&zip=';

    // Redirect to OptiMantra
    window.location.href = bookingUrl;

});