import { createRouter, createWebHistory } from "vue-router";
import Index from "../views/Index";
import Quote from "../views/Quote";

const routes = [
  {
    path: "/",
    name: "index",
    component: Index,
  },
  {
    path: "/quote",
    name: "quote",
    component: Quote,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (to.hash) {
      return {
        el: to.hash,
        behavior: "smooth",
      };
    }
  },
});

export default router;
