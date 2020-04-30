require('./bootstrap');
window.Vue = require('vue');

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

//Imports
require('./filter');
require('./progressbar');
require('./customEvents');

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

//Import View Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//Routes
import { routes } from './routes';

//Register Routes
const router = new VueRouter({
    routes,
    mode: 'hash',

})

const app = new Vue({
    el: '#app',
    router
});
