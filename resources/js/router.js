import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './Components/Backend/Category/Home.vue'

Vue.use(VueRouter)

const routes = [
    { path: '/home', component: Home }
  ]
  
 
  export const router = new VueRouter({
    routes : routes,
    mode: 'history'
  })