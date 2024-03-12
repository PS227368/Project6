document.addEventListener('DOMContentLoaded', function () {
    // Initialiseer Swiper voor elk productslider-element
    var productSliders = document.querySelectorAll('.product-slider');

    productSliders.forEach(function (slider) {
        var swiper = new Swiper(slider, {
            slidesPerView: 'auto',
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 5000, // milliseconds
                disableOnInteraction: false,
            },
        });
    });
});
