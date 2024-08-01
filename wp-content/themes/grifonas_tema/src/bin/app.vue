<template>
  <div v-if="!loading">
    <transition name="fade" mode="out-in">
      <div>
        <component :is="asyncComponent" v-bind="mergedProps" />
      </div>
    </transition>
  </div>
  <div v-else>
    <!-- Loading indicator -->
    <div class="loading-spinner"></div>
  </div>
</template>

<script setup>
import { defineAsyncComponent, reactive, ref, onMounted, computed } from "vue";

const props = defineProps({
  component: String,
  props: Object,
});

const data = reactive({
  component: props.component,
  props: props.props,
})

const acfFields = ref({});
const loading = ref(true);
const themeLoading = ref(true);

const shouldPassAcfFields = computed(() => {
  return Object.keys(acfFields.value).length > 0;
});

const mergedProps = computed(() => {
  return shouldPassAcfFields.value
      ? {
        ...data.props,
        acfFields: acfFields.value,
      }
      : {
        ...data.props,
      };
});

</script>

<style scoped></style>
