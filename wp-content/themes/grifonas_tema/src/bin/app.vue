<template>
  <LottiePlayer v-if="data.component === 'lottie-player'" v-bind="data.props" />
  <MeetTheTeamSection v-if="data.component === 'meet-the-team'" v-bind="data.props" />
</template>

<script setup>
import { defineAsyncComponent, reactive } from "vue";

const LottiePlayer = defineAsyncComponent(() => import('./lottie-player.vue'));
const MeetTheTeamSection = defineAsyncComponent(() => import('./meet-the-team.vue'));

const props = defineProps(['component', 'props'])

const data = reactive({
  component: props.component,
  props: props.props,
})

</script>

<style scoped></style>
