
require('./bootstrap');

window.Vue = require('vue').default;

import {router} from './router'


Vue.component('counter', require('./components/Counter.vue').default);


const app = new Vue({
    el: '#app',
    router
});
