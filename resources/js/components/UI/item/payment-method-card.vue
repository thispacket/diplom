<script setup>

import SelectedIcon from "../../icons/selected-icon.vue";
import {computed} from "vue";

const props = defineProps({
  Icon: Object,
  title: String,
  selected: Boolean
})

const disabled = computed(() => {
  if (!props.selected) return "30%"
})

</script>

<template>
  <div class="payment-method-card" :style="{ opacity: disabled }">
    <selected-icon v-if="selected" size="22" class="selected-icon"/>
    <component :is="Icon" size="24" class="payment-method-card__icon" color="white"/>
    <p class="card-title">{{ title }}</p>
  </div>
</template>

<style lang="scss">
.payment-method-card {
  cursor: pointer;
  background: #252836;
  padding: 10px 0;
  border-radius: 8px;
  width: 30%;
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1px solid #ABBBC2;
  position: relative;

  .selected-icon {
    position: absolute;
    top: 4px;
    right: 4px;
  }

  .card-title {
    margin-top: 5px;
    color: white;
    font-size: 15px;
  }

}
</style>
