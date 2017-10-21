require('./bootstrap');
window.Vue = require('vue')

import Vuetify from 'vuetify'
Vue.use(Vuetify)

var VueScrollTo = require('vue-scrollto')
Vue.use(VueScrollTo)
VueScrollTo.setDefaults({
    container: "body",
    duration: 800,
    easing: "ease",
    offset: 0,
    cancelable: true,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
})

import BackToTop from 'vue-backtotop'
Vue.use(BackToTop)

Vue.component('wedding-location', require('./components/WeddingLocation.vue'))
Vue.component('my-carousel', require('./components/MyCarousel.vue'))
Vue.component('vue-menu', require('./components/VueMenu.vue'))

import * as VueGoogleMaps from 'vue2-google-maps'
Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyDFpPTB3UMqV1Gyonn9GpKB2L-HLhCIoQw',
    libraries: 'places'
  }
})

const app = new Vue({
    el: '#app'
});
