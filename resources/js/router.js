import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './Components/home.vue'
import About from './Components/about.vue'

Vue.use(VueRouter)

const routes = [
    { path: '/home-', component: Home },
    { path: '/about', component: About }
  ]
  
 
  export const router = new VueRouter({
    routes : routes,
    mode: 'history'
  })