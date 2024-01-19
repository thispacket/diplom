<script setup>

import TitleText from "../text/title-text.vue";
import SubtitleText from "@/components/UI/text/subtitle-text.vue";
import PaymentMethodCard from "@/components/UI/item/payment-method-card.vue";
import CardIcon from "../../icons/card-icon.vue";
import PaypalIcon from "../../icons/paypal-icon.vue";
import WalletIcon from "../../icons/wallet-icon.vue";
import {ref} from "vue";
import FormFieldInput from "@/components/UI/form/form-field-input.vue";
import DropdownSelect from "../form/dropdown-select.vue";
import {useOrder} from "@/helper/api/order.js";

const selected = ref('Credit Card')
const {changeConfirm} = useOrder();

const paymentMethods = [
  {
    title: "Credit Card",
    icon: CardIcon,
  },
  {
    title: "Paypal",
    icon: PaypalIcon,
  },
  {
    title: "Cash",
    icon: WalletIcon,
  }
]
const selectMethod = title => {
  selected.value = title
}

</script>

<template>
  <div class="payment">
    <div class="payment__header">
      <title-text text="Payment"/>
      <subtitle-text text="3 payment method available"/>
    </div>

    <title-text class="payment__title" text="Payment Method"/>

    <div class="payment__content">
      <payment-method-card
        v-for="(paymentMethod, index) in paymentMethods"
        :key="index"
        @click="selectMethod(paymentMethod.title)"
        :Icon="paymentMethod.icon"
        :title="paymentMethod.title"
        :selected="selected === paymentMethod.title"
      />
    </div>

    <form class="payment__form">
      <form-field-input
        id="cardholder_name"
        label="Cardholder Name"
        placeholder="Enter name..."
        type="text"
      />
      <form-field-input
        id="card_number"
        label="Card Number"
        placeholder="Enter number..."
        type="text"
      />
      <div class="flex">
        <form-field-input
          id="expiration_date"
          label="Expiration Date"
          placeholder="MM/YY"
          type="date"
        />
        <form-field-input
          id="cvv"
          label="CVV"
          placeholder="cvv"
          type="password"
        />
      </div>

      <div class="flex">
        <div class="form-field">
          <p class="form-field__label">
            Order Type
          </p>
          <dropdown-select />
        </div>

        <form-field-input
          label="Table no."
          value="140"
        />
      </div>
    </form>

    <div class="payment__buttons flex">
      <button @click="changeConfirm" class="payment__btn">Cancel</button>
      <button class="payment__btn">Confirm Payment</button>
    </div>
  </div>
</template>

<style lang="scss">
.flex {
  display: flex;
  column-gap: 16px;

  .filter {
    margin-top: 12px;
  }
}



.payment {
  margin-top: 16px;
  width: 50%;
  padding: 0 0 0 36px;
  height: calc(100vh - 32px - 24px - 24px - 24px);
  position: relative;

  &__btn {
    padding: 18px 0;
    width: 100%;
    border-radius: 8px;
    background: inherit;
    font-weight: 600;
    font-size: 14px;
    color: var(--primary-color);
    border: 1px solid var(--primary-color);
    cursor: pointer;

    &:hover {
      background: var(--primary-color);
      color: white;
      transition: 0.3s;

    }
  }

  &__buttons {
    position: absolute;
    width: 100%;
    bottom: 0;
    padding: 0 36px 0 0;
  }

  &__form {
    display: flex;
    flex-direction: column;
    margin-top: 24px;
    row-gap: 16px;
  }

  .payment__title {
    font-size: 24px;
    margin-top: calc(24px + 24px);
  }

  &__content {
    display: flex;
    margin-top: 24px;
    gap: 24px;
  }

  &__header {

    .sub-title {
      margin-top: 8px;
    }
  }
}
</style>
