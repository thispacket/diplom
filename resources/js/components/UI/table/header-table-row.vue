<script setup>
import TitleText from "../text/title-text.vue";

const props = defineProps({
  names: Array
})
</script>

<template>
  <tr class="order-table__row">
    <td
      v-for="name in props.names"
      :key="name"
      class="order-table__cell">

      <p class="title">{{ name }}</p>
    </td>
  </tr>
</template>

<style lang="scss">
.order-table__row {
  width: 100%;
  color: white;

  .order-table__cell {
    margin-top: 32px;
  }

  .title {
    font-size: 24px !important;
    font-weight: 500;
  }
}

.order-table__row::after {

}
</style>
