import Vue from 'vue';
require('./bootstrap');

import {router} from './router.js'

Vue.component('counter', require('./Components/Counter.vue').default)

const app = new Vue({
    router
}).$mount('#app')

