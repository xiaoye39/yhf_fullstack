import Vue from 'vue'
import VueRouter from 'vue-router'
import Goods from '../views/goods/goods'
// import Comment from '../views/comment/comment'
// import Seller from '../views/seller/seller'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Goods',
    component: Goods
  },
  {
    path: '/comment',
    name: 'Comment',
    component: () => import('../views/comment/comment.vue')
  },
  {
    path: '/seller',
    name: 'Seller',
    component: () => import('../views/seller/seller.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
