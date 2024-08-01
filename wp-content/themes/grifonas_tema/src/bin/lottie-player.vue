<template>
    <dotlottie-player autoplay="true" loop="true" mode="normal" :src="props.url"
        class="w-full lg:scale-125 max-xxl:max-w-[65%] max-xxl:mx-auto max-md:mb-8">
    </dotlottie-player>
</template>

<script setup>
import '@johanaarstein/dotlottie-player';


const props = defineProps(['url']);


</script>
