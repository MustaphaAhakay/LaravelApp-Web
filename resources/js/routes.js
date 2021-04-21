 import Index from './components/IndexComponent.vue';
import Store from './components/StoreComponent.vue';
import Question from './components/Question/QuestionComponent.vue';
// import Reponse from './components/Question/ReponseComponent.vue';
import AvisClient from './components/AvisClient/AvisClientComponent.vue';
import Panier from './components/PanierComponent.vue';
// import User from './components/User/UserComponent.vue';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

export const routes = [
    /*{
        path: '/user',
        name: "user",
        component: User
    },*/
    // pour Appvue
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
        component: AvisClient
    },
    {
        path: '/question',
        component: Question
    },
    /*{
        path: '/reponse',
        component: Reponse
    },*/
    {
        path: '/panier',
        component: Panier
    }
    // pour...
];