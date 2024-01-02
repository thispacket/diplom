<script setup>

    import TrashIcon from "../../icons/trash-icon.vue";
    import { ref, watch } from "vue";
    import {useMenuItem} from "../../../helper/menuPaymentItem.js";

    let props = defineProps({
        paymentItem: Object,
    });

    const { removeFromPayment } = useMenuItem();

    let count = ref(1);
    const path = import.meta.env.VITE_APP_IMAGE_PATH + 'pasta.png';
    const totalPrice = ref(props.paymentItem.price);

    watch(count, () =>  totalPrice.value = (count.value * props.paymentItem.price).toFixed(2));

</script>

<template>
    <div class="payment-item">
        <div class="payment-item__inner">
            <div class="item">
                <img :src="path" alt="pasta" class="payment-item__img">

                <div class="payment-item__info">
                    <p class="payment-item__name">{{ paymentItem.title }}</p>
                    <p class="payment-item__price">$ {{ paymentItem.price }}</p>
                </div>
            </div>

            <div class="payment-item__count">
                <input v-model="count" min="1" max="10" type="number"/>
            </div>

            <div class="payment-item__total-price">$ {{ totalPrice }}</div>
        </div>

        <div class="payment-item__note">
            <input placeholder="Order Note..." type="text" class="text-input">

            <trash-icon
                size="52"
                class="payment-item__trash"
                @click="removeFromPayment(paymentItem)" />
        </div>

    </div>
</template>

<style lang="scss">
    .payment-item {
        width: 100%;
        margin-top: 28px;

        &__total-price {
            width: 70px;
            text-align: end;
        }

        .item {
            display: flex;
            width: 70%;
        }

        &__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            font-size: 20px;
        }

        &__img {
            width: 58px;
        }

        &__info {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin-left: 16px;
        }

        &__name {
            font-weight: 500;
        }

        &__price {
            color: #ABBBC2;
            font-size: 18px;
        }

        &__count {
            margin-left: 10px;
        }

        &__count input{
            background: var(--base-dark-two);
            width: 58px;
            height: 58px;
            border-radius: 8px;
            border: 2px solid #393C49;
            outline: none;
            color: white;
            text-align: center;
            font-size: 16px;
        }

        &__trash {
            border: 1px solid var(--primary-color);
            cursor: pointer;
            border-radius: 8px;
            padding: 12px;
        }

        &__trash:hover {
            background: var(--primary-color);
        }

        &__trash:hover *, &__trash:active * {
            fill: white;
        }

        &__trash:active {
            background: #FF7CA3;
            border: 1px solid #FF7CA3;
        }

        &__note {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 16px;

            .text-input {
                width: 86.5%;
            }
        }
    }

    input[type='number'],
    input[type="number"]:hover,
    input[type="number"]:focus {
        appearance: none;
        -moz-appearance: textfield;
    }

    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
</style>
