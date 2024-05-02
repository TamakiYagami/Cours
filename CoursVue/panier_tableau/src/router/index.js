import Vue from 'vue'
import VueRouter from 'vue-router'

import TableauVue from '@/views/TableauVue.vue'


Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: TableauVue
  }
]

const router = new VueRouter({
  routes
})

export default router
