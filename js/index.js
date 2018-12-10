var Vue = require('vue');
//var VueRouter = require('vue-router');

//import Home from './Home.vue';
//const About = { template: "<div>Home321</div>" };

//const Home = () => import('./Home.vue')
//const Home = { template: "<div>blabla</div>"};

/*
const routes = [
    { name: "Home", path: "/", Home },
    { name: "Frontpage", path: "/home", redirect: "/" },
    { name: "About", path: "/about", component: About },
    { name: "NotFound", path: '*', template: '<div>Not found</div>' }
];

const router = new VueRouter({
    mode: 'history',
    routes: routes
});*/


const app = new Vue({
    el: '#app',
    data: {
        load: false,
        logged_in: false,
        firstname: '',
        lastname: '',
        username: '',
        password: '',
        records: []
    },
    methods: {
        login: function() {
            axios.get('/api/auth/').then(function(response) {
            })
        }
    },
    mounted() {
        axios.get('/api/products/').then(function(response) {
            app.load = true;
            app.records = response.data;
        })
    }
  }).$mount('#app');