<script setup>

import TitleText from "@/components/UI/text/title-text.vue";
import SubtitleText from "@/components/UI/text/subtitle-text.vue";
import AddButton from "@/components/UI/item/add-button.vue";
import PaymentItemPanel from "@/components/UI/layout/payment-item-panel.vue";
import FormButton from "@/components/UI/form/form-button.vue";
</script>

<template>
  <div class="confirmation">
    <div class="confirmation__header">
      <div class="confirmation__header__text">
        <title-text text="Confirmation"/>
        <subtitle-text text="Orders #34562"/>
      </div>
      <add-button/>
    </div>

    <payment-item-panel class="confirmation__panel"/>

    <div class="order-sidebar__total-price">
      <div class="discount">
        <p class="discount__text">Discount</p>
        <p class="discount__value">$0</p>
      </div>

      <div class="sub-total">
        <p class="sub-total__text">Subtotal</p>
        <p class="sub-total__value">$ 21.03</p>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
  .confirmation {
    margin-top: 16px;
    width: 50%;
    height: 100%;
    position: relative;

    .order-sidebar__total-price {
      position: absolute;
      width: 100%;
      top: 30vh;
    }

    &__panel {
      height: 60vh;
      margin-top: 24px;
      border-top: 2px solid var(--base-dark-two);
      border-bottom: 2px solid var(--base-dark-two);
    }

    .menu-item__btn {
      margin: 0;
    }

    &__header {
      display: flex;
      justify-content: space-between;

      .sub-title {
        margin-top: 8px;
        color: #ABBBC2;
      }
    }
  }
</style>
