// Boot strap Required
require('./bootstrap');

// Vue JS
window.Vue = require('vue').default;

// Vuex
import Vuex from 'vuex'
import StoreData from './Store/store'

Vue.use(Vuex)

const store = new Vuex.Store(StoreData)
  

// V Form
window.Form = Form;

import Form from 'vform'
import { HasError, AlertError } from 'vform/src/components/bootstrap5'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

// import toastr js
window.toastr = toastr

import toastr from 'toastr'

// Vue Router
import {router} from './router'

// Sweet Alert2 
import Swal from 'sweetalert2';
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

window.Toast = Toast;

// Vue Component Register
Vue.component('Home', require('./Components/Backend/Category/Home.vue').default);


const app = new Vue({
    router, 
    store

}).$mount('#app-content');
