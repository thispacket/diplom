<script setup>
import HeaderTableRow from "./header-table-row.vue";
import ContentTableRow from "./content-table-row.vue";

const namesHeaderRow = [
  'Customer',
  'Menu',
  'Total Payment',
  'Status'
]
</script>

<template>
  <table class="order-table">
    <tbody class="table-content">
      <header-table-row
        :names="namesHeaderRow"
      />
      <content-table-row v-for="i in 10"/>
    </tbody>
  </table>
</template>

<style lang="scss">
.order-table {
  width: 100%;
  color: white;
  margin-top: 24px;
  background: var(--base-dark-one);
}



</style>
