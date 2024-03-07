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
    path: "/setting/:page?",
    name: "setting",
    component: () => import('../views/Setting.vue'),
    children: [
      {
        path: "appearance",
        name: "appearance",
        component: () => import('../views/setting/Appearance.vue')
      },
      {
        path: "your-restaurant",
        name: "your-restaurant",
        component: () => import('../views/setting/YourRestaurant.vue')
      },
      {
        path: "products-management",
        name: "products-management",
        component: () => import('../views/setting/ProductsManagement.vue')
      },
      {
        path: "notifications",
        name: "notifications",
        component: () => import('../views/setting/Notifications.vue')
      },
      {
        path: "security",
        name: "security",
        component: () => import('../views/setting/Security.vue')
      },
      {
        path: "about",
        name: "about-us",
        component: () => import('../views/setting/About.vue')
      }
    ]
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
