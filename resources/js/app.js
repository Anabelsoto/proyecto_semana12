/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('formulario1-component', require('./components/Formulario1Component.vue').default);
Vue.component('formulario2-component', require('./components/Formulario2Component.vue').default);
Vue.component('formulario3-component', require('./components/Formulario3Component.vue').default);


const app = new Vue({
    el: '#app',
});

const app1 = new Vue({
    el: '#app1',
});
