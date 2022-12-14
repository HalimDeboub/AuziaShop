import './bootstrap';

import Alpine from 'alpinejs';
import {createApp} from "vue";
import AddToCart from './components/AddToCart.vue';
import NavbarCart from './components/NavbarCart.vue';
import ShoppingCart from './components/ShoppingCart.vue'
 
import Toaster from '@meforma/vue-toaster';


window.Alpine = Alpine;
Alpine.start();
const app=createApp();
app.use(Toaster).provide('toast', app.config.globalProperties.$toast)
app.component('NavbarCart', NavbarCart);
app.component('AddToCart', AddToCart);
app.component('ShoppingCart', ShoppingCart);


app.mount('#app');
