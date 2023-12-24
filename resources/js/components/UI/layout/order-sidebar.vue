<script setup>
    import { useWindowVisibility } from "../../helper/orderVisible.js";
    import TitleText from "../text/title-text.vue";
    import FormButton from "@/components/UI/form/form-button.vue";
    import {ref} from "vue";

    const { display } = useWindowVisibility();

    const textsButton = ref([
        "Dine In",
        "To Go",
        "Delivery",
    ]);

    const activeButton = ref("Dine In");

    const makeActive = text => activeButton.value = text;

</script>

<template>
    <aside class="order-sidebar" :style="{display: display}">
        <title-text text="Orders #34562" />

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
    </aside>
</template>


<style lang="scss">
    .order-sidebar {
        padding: 24px;
        display: none;
        width: 1250px;
        background: var(--base-dark-one);
        height: 100vh;
        position: sticky;
        top: 0;
        right: 0;
        z-index: 1;

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

            &__price {
            }
        }
    }
</style>
