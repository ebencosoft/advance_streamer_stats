require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import routes from './routes';
import app from './components/App'
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueRouter);
Vue.use(VueSweetalert2);

/* const app = new Vue({
    el: '#app',
   
    render: h => h(app),
}); */

new Vue({
    el: '#app',
    router: new VueRouter(routes),
    render: h => h(app),
})
