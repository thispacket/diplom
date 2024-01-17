<script setup>

import OptionIcon from "../../icons/option-icon.vue";
import FilterButton from "@/components/UI/layout/filter-button.vue";
</script>

<template>
  <button class="filter-order">
    <filter-button>
      <option-icon color="white"/>
      <p>Filter Order</p>
    </filter-button>
  </button>
</template>

<style lang="scss">
  .filter-order {
    background: transparent;
    border: none;
  }
</style>
