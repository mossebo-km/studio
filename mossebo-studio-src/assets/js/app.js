/**
 * Created by Vlad Starkovsky on 28.06.2017.
 */

"use strict";

//
// Import Libs
//
import './bootstrap'
import Vue from 'vue'

//
// Import Scripts
//

let app = new Vue({
    el: '#app',
    components: {

    },
    data: {

    },

});

//
// Costume Scripts
//

if (location.protocol != 'https:')
{
    location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
}
