<script setup>
import {ref} from "vue";

const props = defineProps({
  status: String
})

const background = ref();
const color = ref();

switch (props.status) {
  case 'Completed':
    background.value = 'rgba(107, 226, 190, .24)';
    color.value = '#50D1AA';
    break;
  case 'Pending':
    background.value = 'rgba(255, 181, 114, 0.2)';
    color.value = '#FFB572';
    break;
  case "Preparing":
    background.value = 'rgba(146,144,254,0.2)';
    color.value = '#9290FE';
    break;
}

</script>

<template>
  <p class="status">
    {{ status }}
  </p>
</template>

<style lang="scss">
  .status {
    width: 70%;
    cursor: pointer;
    font-weight: 500;
    padding: 8px 0;
    font-size: 12px !important;
    background: v-bind(background);
    color: v-bind(color) !important;
    border-radius: 30px;
    text-align: center;
  }
</style>
