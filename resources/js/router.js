import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './Components/Backend/Category/Home.vue'
import Category from './Components/Backend/Category/manage.vue'
import CreateCategory from './Components/Backend/Category/create-category.vue'
import UpdateCategory from './Components/Backend/Category/update-category.vue'

Vue.use(VueRouter)

const routes = [
    { path: '/home', component: Home },
    { path: '/categories', component: Category },
    { path: '/add-category', component: CreateCategory },
    { path: '/edit-category/:id', component: UpdateCategory },
  ]
  
 
  export const router = new VueRouter({
    routes : routes,
    // mode: 'history'
  })