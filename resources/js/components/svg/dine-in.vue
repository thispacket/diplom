<script setup>

import {onMounted, ref} from "vue";

const props = defineProps({
  progress: Number,
  radius: Number,
  color: String,
  opacity: String
});

const circumference = ref(2 * Math.PI * props.radius);
const offset = ref(circumference.value);


const setProgress = () => offset.value = circumference.value * (1 - props.progress / 100);

onMounted(() => {
  setProgress(props.progress);
});

</script>

<template>
  <svg fill="none" class="progress-ring">
    <circle class="progress-ring__background" :r="props.radius" cx="125" cy="125" :stroke="'#fff'" :opacity="props.opacity" stroke-width="15"/>
    <circle :style="{ strokeDasharray: `${circumference} ${circumference}`, strokeDashoffset: offset }" :r="props.radius" cx="125" cy="125"  :stroke="props.color" stroke-width="15"/>
  </svg>
</template>

<style lang="scss">

.progress-ring {
  position: absolute;
  transform: rotate(-90deg);
  stroke-linecap: round;
  width: 250px;
  height: 250px;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;

  &__background {

  }
}

</style>
