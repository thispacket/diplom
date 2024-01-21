import {createRouter, createWebHistory} from "vue-router";

const routes = [
  {
    path: "/",
    name: "home",
    component: () => import('../views/Home.vue')
  },
  {
    path: "/discount",
    name: "discount",
    component: () => import('../views/Discount.vue')
  },
  {
    path: "/dashboard",
    name: "dashboard",
    component: () => import('../views/Dashboard.vue')
  },
  {
    path: "/setting",
    name: "setting",
    component: () => import('../views/Setting.vue')
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
