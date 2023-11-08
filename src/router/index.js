import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import Page6 from "../views/Page6.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView,
    },
    {
      path: "/page1",
      name: "page1",
      component: () => import("../views/Page1.vue"),
      redirect: { name: "page1-home" },
      children: [
        {
          path: "/page1-home",
          name: "page1-home",
          component: () => import("../views/Page1Home.vue"),
        },
        {
          path: "/page6",
          name: "page6",
          component: Page6,
        },
        {
          path: "/page7",
          name: "page7",
          component: () => import("../views/Page7.vue"),
        },
      ],
    },
    {
      path: "/page2",
      name: "page2",
      component: () => import("../views/Page2.vue"),
    },
    {
      path: "/page3",
      name: "page3",
      component: () => import("../views/Page3.vue"),
    },
    // {
    //   path: "/about",
    //   name: "about",
    //   // route level code-splitting
    //   // this generates a separate chunk (About.[hash].js) for this route
    //   // which is lazy-loaded when the route is visited.
    //   component: () => import("../views/AboutView.vue"),
    // },
  ],
});

export default router;
