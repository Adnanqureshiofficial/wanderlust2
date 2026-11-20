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


document.addEventListener('DOMContentLoaded', function () {

    const popup = document.getElementById('bs-popup-overlay');

    if (!popup) return;

    

    setTimeout(function () {

        popup.classList.add('active');

    }, 3000);

    popup.querySelector('.bs-popup-close').addEventListener('click', function () {

        popup.classList.remove('active');

       

    });

    popup.addEventListener('click', function (e) {

        if (e.target === popup) {

            popup.classList.remove('active');

           

        }

    });

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


// Dynamically Passing Service Name value to the CF7 form's service name hidden input
document.addEventListener('DOMContentLoaded', function () {

    const path = window.location.pathname.toLowerCase();

    let service = '';

    if (path.includes('lip-filler')) {
        service = 'Lip Filler Treatment';
    } else if (path.includes('radiesse')) {
        service = 'Radiesse';
    } else if (path.includes('botox')) {
        service = 'Botox';
    } else if (path.includes('hair')) {
        service = 'Laser Hair Removal';
    } else if (path.includes('weightloss')) {
        service = 'Weight Loss Program';
    }


    if (!service) return;

    document.querySelectorAll('input[name="bs_service_name"]').forEach(function(field) {
        field.value = service;
    });

});

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

    // Redirect only after a successful CF7 submission
    if (event.detail.status !== 'mail_sent') {
        return;
    }

    // Convert CF7 input array into an object
    const formData = {};

    event.detail.inputs.forEach(function (input) {
        formData[input.name] = input.value;
    });

    // Retrieve submitted values
    const firstName = formData['first_name'] || '';
    const lastName  = formData['last_name'] || '';
    const email     = formData['email'] || '';
    const phone     = formatOptiMantraPhone(formData['phone']) || '';

    // Detect current landing page
    const path = window.location.pathname.toLowerCase();

    let sid, unCryptedSid, pid, lid;

    if (path.includes('lip-filler')) {

        sid = 'cmJrYlRualdPQ2dFd0dBaXFrbUlvdz09';
        unCryptedSid = '1511643073';
        pid = 'UWhrZG1vUWhHbndGV3ljcXFidnBGUT09';
        lid = 'TGxwZUt3bGNpNWt3ZTJOdlZGcjlhZz09';

    } else if (path.includes('radiesse')) {

        sid = 'TUp0TTNid3poeWR0cmRpeEVVRE43UT09';
        unCryptedSid = '1511643103';
        pid = 'UWhrZG1vUWhHbndGV3ljcXFidnBGUT09';
        lid = 'TGxwZUt3bGNpNWt3ZTJOdlZGcjlhZz09';

    } else if (path.includes('botox')) {

        sid = 'eFl3R01JVTV2UDIrdGU1Nm9VS2Q4UT09';
        unCryptedSid = '1511643101';
        pid = 'UWhrZG1vUWhHbndGV3ljcXFidnBGUT09';
        lid = 'TGxwZUt3bGNpNWt3ZTJOdlZGcjlhZz09';

    } else if (path.includes('hair')) {

    sid = 'M1JBYkNJRDhGbVRXcTZ5KzgzTWwvdz09';
    unCryptedSid = '1511643132';
    pid = 'UWhrZG1vUWhHbndGV3ljcXFidnBGUT09';
    lid = 'TGxwZUt3bGNpNWt3ZTJOdlZGcjlhZz09';

    } else if (path.includes('weightloss')) {

    sid = 'T3ZUVVRiTmVEdWJYdEllc2xJZDlMUT09';
    unCryptedSid = '1512420671';
    pid = 'UWhrZG1vUWhHbndGV3ljcXFidnBGUT09';
    lid = 'TGxwZUt3bGNpNWt3ZTJOdlZGcjlhZz09';
    } else {

        return;

    }

    // Build OptiMantra URL
    const bookingUrl =
        'https://www.optimantra.com/optimus/patient/patientaccess/practsNslotsNEW'
        + '?sid=' + encodeURIComponent(sid)
        + '&unCryptedSid=' + encodeURIComponent(unCryptedSid)
        + '&pid=' + encodeURIComponent(pid)
        + '&lid=' + encodeURIComponent(lid)
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
        + '&zip='
        + '&clienttzoffset=-330';

    // Redirect to the appropriate OptiMantra booking page
    window.location.href = bookingUrl;

});