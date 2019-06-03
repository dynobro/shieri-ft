/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router').default;
Vue.use(VueRouter);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


//Vue.component('product-catalog', require('./components/ProductCatalog.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const ProductCatalog = require('./components/ProductCatalog.vue').default;
const Bascket = require('./components/Bascket.vue').default;
const CashPayment = require('./components/CashPayment.vue').default;
const OrderWait = require('./components/OrderWait.vue').default;

const routes = [
    { path: '/', component: ProductCatalog },
    { path: '/my-order', component: Bascket },
    { path: '/cash-payment', component: CashPayment },
    { path: '/wait-for-order', component: OrderWait }
]

const customerRouter = new VueRouter({
    routes
});


const customerApp = new Vue({
    router: customerRouter,
    el: '#customer-app',
    data: {
        myOrder: [],
        total: 0
    },
    created: function(){
        window.Echo.channel('acredited-order').listen('AcreditedOrder', (data) => {
            console.log({
                data
            });
        });

    },
    methods: {
        calculateTotal: function(){
            this.total = 0;
            console.log({
                order: this.myOrder
            })
            this.myOrder.forEach((order) => {
                this.total += (order.quantity * order.product.price)
            });
        }
    }
    
});
