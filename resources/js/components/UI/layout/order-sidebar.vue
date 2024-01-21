<script setup>
import {ref} from "vue";
import TitleText from "../text/title-text.vue";
import FormButton from "../form/form-button.vue";
import PaymentItemPanel from "../layout/payment-item-panel.vue";
import {useOrder} from "@/helper/api/order.js";

const {isConfirm} = useOrder();

const textsButton = ref([
  "Dine In",
  "To Go",
  "Delivery",
]);

const activeButton = ref("Dine In");

const makeActive = text => activeButton.value = text;

</script>

<template>
  <aside class="order-sidebar">
    <div class="order-sidebar__inner">
      <title-text text="Orders #34562"/>

      <div class="choice">
        <form-button
          v-for="textButton in textsButton"
          :key="textButton"
          :text="textButton"
          :active="activeButton"
          @click="makeActive(textButton)"
        />
      </div>

      <div class="column-name">
        <p class="column-name__item">Item</p>
        <p class="column-name__qty">Qty</p>
        <p class="column-name__price">Price</p>
      </div>

      <div class="divider"></div>

      <payment-item-panel/>

      <div class="order-sidebar__total-price">
        <div class="discount">
          <p class="discount__text">Discount</p>
          <p class="discount__value">$0</p>
        </div>

        <div class="sub-total">
          <p class="sub-total__text">Subtotal</p>
          <p class="sub-total__value">$ 21.03</p>
        </div>

        <form-button @click="isConfirm = true" text="Continue to Payment"/>
      </div>
    </div>

  </aside>
</template>


<style lang="scss">
.order-sidebar {
  padding: 24px;
  width: 1340px !important;
  background: var(--base-dark-one);
  height: 100vh;
  position: sticky;
  top: 0;
  right: 0;
  z-index: 1;


  &__inner {
    position: relative;
  }

  .divider {
    margin-top: 24px;
  }

  .title {
    font-size: 24px;
    font-weight: 400;
  }

  .choice {
    display: flex;
    column-gap: 12px;
    margin-top: 24px;
  }

  .column-name {
    display: flex;
    justify-content: space-between;
    margin-top: 24px;

    &__item, &__qty, &__price {
      color: white;
      font-size: 18px;
      font-weight: 600;
      font-family: "Barlow", sans-serif;
    }

    &__item {
      width: 70%;
    }
  }

  &__total-price {
    margin-top: calc(50vh + 24px);
    color: white;

    .form-button {
      display: block;
      width: 100%;
      position: absolute;
      top: 88vh;
      color: white;
      font-size: 18px;
      padding: 20px;
      border: 2px solid white;
    }

    .form-button:hover {
      background: var(--primary-color);
      border: 2px solid var(--primary-color);
      box-shadow: 0 0 25px 1px var(--primary-color);
    }

    .form-button:active {
      background: var(--primary-color);
      border: 2px solid var(--primary-color);
      box-shadow: 0 0 0 0 var(--primary-color);

    }

    .discount {
      display: flex;
      justify-content: space-between;
      align-items: center;

      &__text {
        font-size: 18px;
        color: #ABBBC2;
      }

      &__value {
        font-size: 18px;
      }
    }

    .sub-total {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 12px;

      &__text {
        font-size: 18px;
        color: #ABBBC2;
      }

      &__value {
        font-size: 18px;
      }
    }
  }
}

</style>
