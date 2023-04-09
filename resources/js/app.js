require('./bootstrap');
import router from './Router/index';
import { createApp } from 'vue';
import App from './App.vue';

createApp({
    components: {
        App,
    }
}).use(router).mount('#app');

