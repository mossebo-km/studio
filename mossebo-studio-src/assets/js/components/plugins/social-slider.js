
// Слайдер Социальных сетей
window.addEventListener('DOMContentLoaded', () => {

    new Swiper('.js-socials-slider', {
        direction: 'horizontal',
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 32,
        loop: true,
        freeModeMomentumVelocityRatio: 0.5,
    })
})
