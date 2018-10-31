
// Слайдер видеоблога на странице франшизы
window.addEventListener('DOMContentLoaded', () => {
    initSliderWithFancybox('.js-blog-slider', {
        direction: 'horizontal',
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 32,
        loop: true,
        freeModeMomentumVelocityRatio: 0.5,
        pagination: {
            el: '.js-blog-slider-pagination',
            clickable: true
        }
    })

    new Swiper('.js-socials-slider', {
        direction: 'horizontal',
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 32,
        loop: true,
        freeModeMomentumVelocityRatio: 0.5,
    })
})
