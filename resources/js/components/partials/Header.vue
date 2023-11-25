<template>
    <div class=" w-full max-w-[1265px] mx-auto flex items-center justify-between py-4 px-4 space-x-4">
        <a href="/">
            <img src="/images/logo.png" alt="">
        </a>
        <div class=" flex items-center space-x-4 sm:space-x-8">
         
            <a href="/home" class=" text-[#392507] font-Poppins text-sm  sm:text-xl  whitespace-nowrap  border-[#647BFF]" :class="{'border-b-2 font-semibold':activeLink == 'home'}">Home</a>
            <a href="/about-us" class=" text-[#392507] font-Poppins  text-sm  sm:text-xl whitespace-nowrap  border-[#647BFF]" :class="{'border-b-2 font-semibold':activeLink == 'about-us'}">About us</a>
            <a href="/request-demo" class=" text-[#392507] font-Poppins  text-sm  sm:text-xl whitespace-nowrap  border-[#647BFF]" :class="{'border-b-2 font-semibold':activeLink == 'request-demo'}">Request Demo</a>
        </div>
    </div>
</template>


<script setup>
import { onMounted, ref } from "vue";

 const activeLink = ref('home');

onMounted(() => {
    if (window.location.pathname === '/home') {
        activeLink.value = 'home';
    } else if (window.location.pathname === '/about-us') {
        activeLink.value = 'about-us';
    } else if (window.location.pathname === '/request-demo') {
        activeLink.value = 'request-demo';
    }
});
</script>
