<template>
    <div class="category-navigation">
        <div class="buttons">
            <div
                class="category-navigation__button"
                :class="active === category ? 'active' : ''"
                v-for="category in categoryName"
                :key="category"
                @click="makeActive(category)"
                >
                {{ category }}
            </div>
        </div>

        <div class="divider">

        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

const categoryName = ref([
    "Hot dishes",
    "Cold Dishes",
    "Soup",
    "Grill",
    "Appetizer",
    "Dessert"
])

const active = ref("Hot dishes")

const makeActive = name => active.value = name

</script>

<style lang="scss">
    .category-navigation {
        .buttons {
            display: flex;
        }

        &__button {
            background: inherit;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 32px;
            font-size: 14px;
            font-weight: 600;
            font-family: "Barlow", sans-serif;

        }

        .active {
            color: var(--primary-color);
        }

        .active::after {
            content: "";
            height: 3px;
            width: 32px;
            background: var(--primary-color);
            display: block;
            margin-top: 13px;
            position: absolute;
            border-radius: 2px;
        }

        &__button:first-child {
            margin-left: 0;
        }
    }
    .divider {
        width: 100%;
        height: 1px;
        background: #393C49;
        margin-top: 14px;
    }
</style>
