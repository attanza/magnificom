require('./bootstrap');
window.Vue = require('vue')

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

import Scrollspy from 'vue2-scrollspy';
Vue.use(Scrollspy);

Vue.component('main-menu', require('./components/portfolio/MainMenu.vue'))

const app = new Vue({
    el: '#app'
});
