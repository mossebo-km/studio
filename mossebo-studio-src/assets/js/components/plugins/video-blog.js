
// Слайдер видеоблога на странице франшизы
window.addEventListener('DOMContentLoaded', () => {
    initSliderWithFancybox('.js-videoblog-slider', {
        direction: 'horizontal',
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 32,
        loop: true,
        freeModeMomentumVelocityRatio: 0.5,
        pagination: {
            el: '.js-videoblog-slider-pagination',
            clickable: true
        }
    })
})
