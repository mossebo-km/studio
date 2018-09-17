/**
 * GLOBAL
 */

/**
 * Imports
 */

import Vue from 'vue'

import Swiper from 'swiper'
import '@fancyapps/fancybox'


window.Swiper = Swiper

/**
 * App
 */
import InteriorPano from './components/InteriorPano'

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
        InteriorPano
    },

    data: {

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
    }
});

window.app = app
