<template>
  <component :is="asyncComponent" v-bind="data.props" />
</template>

<script setup>
import { defineAsyncComponent, reactive, computed } from "vue";

const props = defineProps(["component", "props"]);
const data = reactive({
  component: props.component,
  props: props.props || {},
});

const components = {
  
};

const asyncComponent = computed(() => {
  return components[data.component] || null;
});
</script>

<style scoped>
.loading {
  text-align: center;
  padding: 20px;
}
.error {
  text-align: center;
  color: red;
  padding: 20px;
}
</style>
