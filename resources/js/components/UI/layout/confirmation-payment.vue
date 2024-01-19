<script setup>

import BackIcon from "../../icons/back-icon.vue";
import Confirmation from "./confirmation.vue";
import Payment from "../layout/payment.vue";
import {useOrder} from "../../../helper/api/order.js";

const {changeConfirm} = useOrder();

</script>

<template>
  <div class="confirmation-payment">
    <back-icon
      @click="changeConfirm"
      class="back-icon"
      size="32"
      color="white"/>

    <div class="confirmation-payment__content">
      <confirmation/>
      <payment/>
    </div>
  </div>
</template>

<style lang="scss">
.confirmation-payment {
  position: absolute;
  width: 60%;
  right: 0;
  bottom: 0;
  top: 0;
  height: 100vh;
  z-index: 5;
  background: var(--base-dark-one);
  border-radius: 8px 0 0 8px;
  padding: 24px;

  .back-icon {
    cursor: pointer;
  }

  &__content {
    position: relative;
    display: flex;
  }
}


</style>
