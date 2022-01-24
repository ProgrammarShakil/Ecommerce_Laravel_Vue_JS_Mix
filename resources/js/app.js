import Vue from 'vue';
require('./bootstrap');

Vue.component('counter', require('./components/Counter.vue').default)

const app = new Vue({
    el: '#app'
})

