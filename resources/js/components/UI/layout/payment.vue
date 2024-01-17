<script setup>

import TitleText from "../text/title-text.vue";
import SubtitleText from "@/components/UI/text/subtitle-text.vue";
import PaymentMethodCard from "@/components/UI/item/payment-method-card.vue";
import CardIcon from "../../icons/card-icon.vue";
import PaypalIcon from "../../icons/paypal-icon.vue";
import WalletIcon from "../../icons/wallet-icon.vue";
import {ref} from "vue";

const selected = ref('Credit Card')

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

    <form>

    </form>
  </div>
</template>

<style lang="scss">
.payment {
  margin-top: 16px;
  width: 50%;
  padding: 0 24px;

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
