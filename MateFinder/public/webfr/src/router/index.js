import { createRouter, createWebHistory } from 'vue-router'
import { setTitle } from '@/router/guards/SetTitleGuard.mjs'
export const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('@/pages/LandingPage.vue'),
      meta: {
        requiresAuth: false,
        title: 'Landing page'
      }
    },
    {
      path: '/form',
      name: 'form',
      component: () => import('@/pages/SearchForm.vue'),
      meta: {
        requiresAuth: false,
        title: 'Searching'
      }
    },
    {
        path: '/card',
        name: 'card',
        component: () => import('@/pages/Mates.vue'),
        meta: {
          requiresAuth: false,
          title: 'Mates'
        }
    },
  ]
})

router.beforeEach(setTitle)
