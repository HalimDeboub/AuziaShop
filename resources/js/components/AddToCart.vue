<template>

<div class="flex items-center justify-between py-4">
  <button  class="bg-orange-600 py-1.5 px-6 text-white rounded-full" v-on:click.prevent="addToCart"> Add to Cart</button>

 </div>
</template>

<script setup>
import useProduct from '../composables/products'
const { add } = useProduct();
const productId=defineProps(['product-id']);
const addToCart= async ()=>{
  
  await axios.get('/api/user').then(async(res)=>{
       await add(productId)
  }).catch(err=>console.log(err))
}

</script>  