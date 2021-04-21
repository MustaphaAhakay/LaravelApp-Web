
require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
//pour VueJS on scroll animations
import AOS from 'aos'
import 'aos/dist/aos.css'
//-------
import App from './App.vue';

import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';
Vue.use(VueAxios, axios);
Vue.use(VueRouter)
/*
import Index from './components/IndexComponent.vue';
import Store from './components/StoreComponent.vue';
import Question from './components/QuestionComponent.vue';
import AvisClient from './components/AvisClientComponent.vue';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const routes = [
    {
        path: '/',
        component: Index
    },
    {
        path: '/store',
        component: Store
    },
    {
        path: '/avisClient',
        component: Question
    },
    {
        path: '/question',
        component: AvisClient
    }
];
*/
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

export const app = new Vue({
    created () {
        AOS.init()
      },
    el: '#app',
    router: router,
    render: h => h(App),
});
