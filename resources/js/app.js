import './bootstrap';

import Alpine from 'alpinejs';
import {createApp} from "vue";
import AddToCart from './components/AddToCart.vue';
import NavbarCart from './components/NavbarCart.vue';


window.Alpine = Alpine;

Alpine.start();
const app=createApp();
app.component('NavbarCart', NavbarCart);
app.component('AddToCart', AddToCart);


app.mount('#app');
