/**
 * GLOBAL
 */

import './bootstrap';
import './global-configs';

import Vue from "vue";

/**
 * Components
 */

import InteriorPano from './components/InteriorPano'
import MobileSlider from './components/MobileSlider'
import StudiosMap from './components/map/StudiosMap'
import BackgroundImageLoader from './components/imageLoaders/BackgroundImageLoader'
import UBlockInstagram from './components/UBlockInstagram'

// Plugins Imports
import './components/plugins/social-slider'
import './components/plugins/video-blog'

/**
 * App
 */

Vue.use(VueCharts)


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
        StudiosMap,
        BackgroundImageLoader,
        MobileSlider,
        UBlockInstagram
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
