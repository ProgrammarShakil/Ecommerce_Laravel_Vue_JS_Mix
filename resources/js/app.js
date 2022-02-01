
require('./bootstrap');

window.Vue = require('vue').default;

import {router} from './router'


Vue.component('Home', require('./Components/Backend/Category/Home.vue').default);


const app = new Vue({
    el: '#app',
    router
});
