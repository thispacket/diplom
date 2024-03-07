<script setup>

import {IconLoader2} from "@tabler/icons-vue";

const props = defineProps({
  color: String,
  size: String
})
</script>

<template>
  <icon-loader2 class="loader" :color="color" :size="size"/>
</template>

<style lang="scss">

.loader {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
}

.loader {
  animation: rotate 1s linear infinite;
}

@keyframes rotate {
  100% {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}

</style>
