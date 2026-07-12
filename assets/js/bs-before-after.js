const slider = document.querySelector("#comparisonSlider");

if (slider) {

    const overlay = slider.querySelector(".comparison-overlay");
    const divider = slider.querySelector(".comparison-divider");

    let active = false;

    function move(x) {

        const rect = slider.getBoundingClientRect();

        let position = ((x - rect.left) / rect.width) * 100;

        position = Math.max(0, Math.min(100, position));

        overlay.style.width = position + "%";
        divider.style.left = position + "%";
    }

    slider.addEventListener("mousedown", () => active = true);

    window.addEventListener("mouseup", () => active = false);

    window.addEventListener("mousemove", (e) => {

        if (active) move(e.clientX);

    });

    slider.addEventListener("touchstart", () => active = true);

    slider.addEventListener("touchend", () => active = false);

    slider.addEventListener("touchmove", (e) => {

        move(e.touches[0].clientX);

    });

}