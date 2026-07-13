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
const COUNTDOWN_DURATION = 24 * 60 * 60 * 1000;

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
    if (!hoursEl || !minutesEl || !secondsEl) return;

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

        // Calculate hours, minutes, seconds
        const hours = Math.floor(distance / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Inject UI content changes safely
        hoursEl.textContent = String(hours).padStart(2, "0");
        minutesEl.textContent = String(minutes).padStart(2, "0");
        secondsEl.textContent = String(seconds).padStart(2, "0");

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

sliders.forEach(slider=>{

    const track = slider.querySelector(".results-track");

    const slides = slider.querySelectorAll(".result-slide");

    let index = 0;

    setInterval(()=>{

        index++;

        if(index >= slides.length){

            index = 0;

        }

        track.style.transform =
            `translateX(-${index*100}%)`;

    },3500);

});