import Vue from 'vue'
import VueRouter from 'vue-router'

import TableauVue from '@/views/TableauVue.vue'
import ClickMe from '@/views/Boite.vue'
import ParaVue from '@/views/ParaVue.vue'
import Alouette from '@/views/Alouette.vue'
import Perms from '@/views/Perms.vue'
import Titre from '@/views/TitreView.vue'
import Terme from '@/views/Terme.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: TableauVue
  }, 
  {
    path: '/clickme',
    name: 'clickme',
    component: ClickMe
  },
  {
    path: '/paravue',
    name: 'paravue',
    component: ParaVue
  },
  {
    path: '/alouette',
    name: 'alouette',
    component: Alouette
  },
  {
    path: '/perms',
    name: 'perms',
    component: Perms
  },
  {
    path: '/titre',
    name: 'titre',
    component: Titre
  },
  {
    path: '/terme',
    name: 'terme',
    component: Terme
  }
]

const router = new VueRouter({
  routes
})

export default router
