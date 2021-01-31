/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('map-component', require('./components/MapComponent.vue').default);
Vue.component('map-component-with-details', require('./components/MapComponentWithDetails.vue').default);
Vue.component('asset-list', require('./components/AssetList.vue').default);
Vue.component('calculateimpact', require('./components/impact-calculation.vue').default);
Vue.component('showassets', require('./components/assets.vue').default);
Vue.component('associateassets', require('./components/AssociateAssets.vue').default);
Vue.component('impactcalculation', require('./components/simulator.vue').default);
Vue.component('googlemap', require('./components/GoogleMapComponent.vue').default);

import VueAwesomeSwiper from 'vue-awesome-swiper'

Vue.use(require('vue-chartist'))
const app = new Vue({
    el: '#app',
});
