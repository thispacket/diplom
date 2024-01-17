<script setup>

import PaymentItem from "@/components/UI/item/payment-item.vue";
import {useMenuItem} from "@/helper/menu_payment_item.js";

const {menuPaymentItems} = useMenuItem();

</script>

<template>
  <div class="payment-panel">
    <payment-item
      v-for="(menuItem, index) in menuPaymentItems"
      :key="index"
      :payment-item="menuItem"
    />
  </div>
</template>

<style lang="scss">

.payment-panel {
  position: absolute;
  width: calc(100% + 5px);
  left: 0;
  height: 50vh;
  overflow: scroll;
  overflow-x: hidden;
  overflow-y: auto;
  border-bottom: 2px solid var(--base-dark-two);
}

.payment-panel::-webkit-scrollbar, {
  width: 5px;
  margin-left: 5px;
}

.payment-panel::-webkit-scrollbar-track, html::-webkit-scrollbar-track {
  background: var(--base-dark-one);
}

.payment-panel::-webkit-scrollbar-thumb, html::-webkit-scrollbar-thumb {
  border: 3px solid var(--base-dark-one);
}
</style>
