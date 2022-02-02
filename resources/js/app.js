// Boot strap Required
require('./bootstrap');

// Vue JS
window.Vue = require('vue').default;


// V Form
import Form from 'vform'

window.Form = Form;

// Vue Router
import {router} from './router'

// Vue Component Register
Vue.component('Home', require('./Components/Backend/Category/Home.vue').default);


const app = new Vue({
    router
}).$mount('#app-content');
