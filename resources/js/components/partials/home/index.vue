<template>
    <DefaultLayout class=" bg-[#F0F3FC]">
        <div class=" w-full pt-[16rem] relative">
            <img src="/images/servers.png" class=" object-cover" alt="">
           <div class=" w-full h-full absolute top-0 left-0">
             <div class=" pt-[5rem] sm:pt-[10rem] md:pt-[16rem] px-4 max-w-[1265px] mx-auto  flex flex-col items-end  space-y-7">
                <h1 class=" text-[#241704] text-right text-[40px] sm:text-[60px] md:text-[94px] leading-[106.383%] font-bold font-Poppins">Is your team <br> ready? </h1>
                <p class=" text-[#241704] text-sm sm:text-base text-right font-Poppins max-w-[464px] text-opacity-70">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                </p>
                <button class=" text-white font-Poppins text-center text-sm sm:text-[15px] font-semibold bg-[#647BFF] btn hover:scale-110 duration-200 rounded-[14px]">request demo</button>
            </div>
           </div>
        </div>
    </DefaultLayout>
</template>

<script setup>
 import DefaultLayout from '../../layouts/default.vue'
</script>

<style scoped>
 .btn {
    box-shadow: -12px 12px 50px 0px rgba(100, 123, 255, 0.30);
    padding: 15px 50px;
 }
</style>