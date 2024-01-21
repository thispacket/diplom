<script setup>

import Status from "@/components/UI/item/status.vue";

const path = import.meta.env.VITE_APP_IMAGE_PATH;

</script>

<template>
  <div class="order-table">
    <div class="order-table__header">
      <p class="order-table__header-customer-name">Customer</p>
      <p class="order-table__header-menu">Menu</p>
      <p class="order-table__header-total-payment">Total Payment</p>
      <p class="order-table__header-status">Status</p>
    </div>

    <div class="order-table__content" v-for="i in 10" :key="i">
      <div class="order-table__content-customer-name">
        <img class="customer-image" :src="path + 'avatar.png'" alt="">
        <p class="customer-name">Eren Jaegar</p>
      </div>
      <p class="order-table__content-menu">Spicy seasoned seafood noodles </p>
      <p class="order-table__content-total-payment">$125</p>
      <status status="Completed"/>
    </div>
  </div>
</template>

<style lang="scss">
.order-table {
  width: 100%;
  margin-top: 24px;
  color: white;

  &__header {
    width: 100%;
    display: grid;
    //grid-template-columns: repeat(4, 1fr);
    grid-template-columns: repeat(auto-fill, minmax(calc(100% / 4 - 24px), 1fr));

    p {
      font-size: 20px !important;
      font-weight: 500;
    }
  }

  &__header::after {
    content: "";
    display: grid;
    margin-top: 16px;
    width: calc(100% * 4 + 48px);
    margin-left: -24px;
    height: 2px;
    background: var(--base-dark-two);
  }

  &__content {
    display: grid;
    margin-top: 20px;
    grid-template-columns: repeat(auto-fill, minmax(calc(100% / 4 - 24px), 1fr));
    width: 100%;
    align-items: center;

    p {
      font-size: 18px !important;
    }

    &-customer-name {
      display: flex;
      align-items: center;
      column-gap: 16px;

      .customer-image {
        width: 40px;
      }
    }
  }
}
</style>
