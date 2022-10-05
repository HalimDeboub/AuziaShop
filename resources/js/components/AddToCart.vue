<template>

<div class="flex items-center justify-between py-4">
  <button  class="bg-yellow-200 py-1.5 px-6 rounded-full" v-on:click.prevent="addToCart"> Add to Cart</button>

 </div>
</template>
<script setup>
import axios from 'axios';

  const productId=defineProps(['product-id']);
const addToCart= async ()=>{
  //await axios.get('/sanctum/csrf-cookie')
  await axios.get('/api/user').then(async(res)=>{
       let response=await axios.post('api/products',{productId:productId})
       console.log(response)
  }).catch(err=>console.log(err))
}

</script>  