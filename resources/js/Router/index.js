import { createRouter, createWebHistory } from "vue-router";
import routes from './router.js';

import Home from '../Pages/Home.vue';

const router = createRouter({
    history:createWebHistory(),
    routes
})

export default router;