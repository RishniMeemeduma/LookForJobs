import "bootstrap/dist/css/bootstrap.min.css"
import router from './Router/index';
import { createApp } from 'vue';
import App from './App.vue';
import axios from 'axios';

// globalize axios
const axiosInstance = axios.create({
    withCredentials: true,
  });

const app = createApp(App);
app.use(router);
app.config.globalProperties.$axios = { ...axiosInstance }               

app.mount('#app');

import "bootstrap/dist/js/bootstrap.js"


