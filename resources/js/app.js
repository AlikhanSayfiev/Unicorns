require('./bootstrap');


window.Vue = require('vue');

import 'es6-promise/auto'
import axios from 'axios'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import store from './store'
import Vuelidate from 'vuelidate'
import App from './components/App'
import auth from './auth'
import router from './router'

Vue.router = router
Vue.use(VueRouter)

Vue.use(Vuelidate)
Vue.use(VueAxios, axios)
axios.defaults.baseURL = `/api/v1`
Vue.use(VueAuth, auth)


const app = new Vue({
   el: '#app',
   store,
   router,
   render(h) { return h(App) }
});