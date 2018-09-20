/**
 * GLOBAL
 */

import './bootstrap'

/**
 * Imports
 */

import Vue from 'vue'

import Swiper from 'swiper'
import '@fancyapps/fancybox'
import ChartJS from 'chart.js'
import 'hchs-vue-charts'

function getLocale() {
    return window.navigator.userLanguage || window.navigator.language
}

ChartJS.defaults.global.defaultFontFamily = 'Montserrat'
ChartJS.defaults.global.defaultFontColor = '#979797'

function setChartFontSize() {
    if (window.innerWidth < 375) {
        ChartJS.defaults.global.defaultFontSize = 8
    }
    else if (window.innerWidth < 576) {
        ChartJS.defaults.global.defaultFontSize = 10
    }
    else if (window.innerWidth < 768) {
        ChartJS.defaults.global.defaultFontSize = 12
    }
    else {
        ChartJS.defaults.global.defaultFontSize = 14
    }
}

setChartFontSize()

ChartJS.pluginService.register({
    beforeRender(chart, easing) {
        for (let i in chart.scales) {
            let scale = chart.scales[i]

            if (scale.options.ticks.formatNumber) {
                scale.ticksAsNumbers.forEach((number, index) => {
                    number = new Intl.NumberFormat(getLocale(), { maximumSignificantDigits: 3 }).format(number)

                    scale._ticks[index].label = number.replace(' ', '&thinsp;')
                })
            }

            if (scale.options.ticks.hideZero) {
                scale.ticksAsNumbers.forEach((number, index) => {
                    if (number === 0) {
                        scale._ticks[index].label = ''
                    }
                })
            }
        }
    },

    resize(chart, easing) {
        setChartFontSize()
    }
});


Vue.use(VueCharts)


window.Swiper = Swiper

window.initSliderWithFancybox = function(query, config) {
    let sliderEl = document.querySelector(query)

    if (! sliderEl) return

    let slider = new Swiper(sliderEl, config)

    let selector = query + ' .swiper-slide:not(.swiper-slide-duplicate) .js-fancybox-true'

    $().fancybox({
        selector,
        backFocus: false,
    });

    let $document = $(document)

    $document.on('click', query + ' .js-fancybox-clicker', function(e) {
        let $this = $(this)

        if ($this.is(selector)) return

        e.preventDefault()

        $document.find(selector)
            .filter('[data-key="' + this.getAttribute('data-key') + '"]')
            .trigger("click.fb-start", {
                $trigger: $this
            })
    })

    return {
        slider: slider,

        destroy() {
            $document.off('click', query + ' .js-fancybox-clicker')
            slider.destroy(true, true)
        }
    }
}


/**
 * App
 */
import InteriorPano from './components/InteriorPano'
import MobileSlider from './components/MobileSlider'
import BackgroundImageLoader from './components/imageLoaders/BackgroundImageLoader'

const breakpoints = {
    xs: 1,
    sm: 576,
    md: 768,
    lg: 992,
    xl: 1200
}

const app = new Vue({
    el: '#app',

    components: {
        InteriorPano,
        BackgroundImageLoader,
        MobileSlider
    },

    data: {
        windowWidth: window.innerWidth
    },

    created() {
        this.resizeHandler = _.debounce(() => {
            this.windowWidth = window.innerWidth
            this.$emit('resize')
        }, 50)

        window.addEventListener('resize', this.resizeHandler, { passive: true })
    },

    methods: {
        windowLessThan(size) {
            return this.windowWidth < this.getBreakpoint(size)
        },

        windowMoreThan(size) {
            return this.windowWidth >= this.getBreakpoint(size)
        },

        getBreakpoint(size) {
            return breakpoints[size]
        },

        windowBetween(from, to) {
            return this.windowWidth >= breakpoints[from] && this.windowWidth < breakpoints[to]
        },
    },
});


window.app = app

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



// Проверка на ретина дисплей
window.isHighDensity = (function() {
    let isHighDensity = ((window.matchMedia && (window.matchMedia('only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)').matches || window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)').matches)) || (window.devicePixelRatio && window.devicePixelRatio > 1.3))

    return () => {
        return isHighDensity
    }
}())
