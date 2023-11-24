<template>
    <div class=" w-full overflow-hidden">
       <div class=" w-full">
         <Header />
       </div>
        <div class=" w-full">
            <slot></slot>
        </div>
     <div class=" w-full">
           <Footer />
     </div>
    </div>
</template>

<script setup>
 import Header from '../partials/Header.vue'
 import Footer from '../partials/Footer.vue'
</script>