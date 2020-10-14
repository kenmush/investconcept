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
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(require('vue-chartist'))
const app = new Vue({
    el: '#app',
});
