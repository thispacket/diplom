<script setup>

import TitleText from "../text/title-text.vue";
import FilterButton from "../form/filter-order.vue";
import OrderTable from "../table/order-table.vue";
</script>

<template>
  <div class="order-reports">
    <div class="order-reports__header">
      <title-text text="Order Reports"/>
      <filter-button/>
    </div>

    <order-table/>
  </div>
</template>

<style lang="scss">
  .order-reports {
    position: absolute;
    width: 100%;
    height: calc(100% / 1.6);
    overflow: scroll;
    overflow-x: hidden;
    padding: 24px;
    background: var(--base-dark-one);
    border-radius: 8px;
    bottom: 0;

    .title {
      font-size: 24px;
    }

    &__header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  }

  .order-reports::-webkit-scrollbar, {
    width: 5px;
    margin-left: 5px;
    border-radius: 8px;
  }

  .order-reports::-webkit-scrollbar-track, html::-webkit-scrollbar-track {
  }

  .order-reports::-webkit-scrollbar-thumb, html::-webkit-scrollbar-thumb {
  }
</style>
