<template>
    <div class="dropdown-select">
        <dropdown-icon/>
        <div class="dropdown-select__text">
            Dine in
        </div>
<!--        <div class="dropdown-select__text">-->
<!--            Dine in-->
<!--        </div>-->

<!--        <div class="dropdown-select__text">-->
<!--            Dine in-->
<!--        </div>-->
    </div>
</template>

<script setup>

import DropdownIcon from "../../icons/dropdown-icon.vue";
</script>

<style lang="scss">
    .dropdown-select {
        display: flex;
        background: #1F1D2B;
        border-radius: 8px;
        padding: 16px;
        align-items: center;
        cursor: pointer;
        border: 1px solid #393C49;

        &__text {
            color: white;
            font-family: "Barlow", sans-serif;
            font-weight: 500;
            margin-left: 10px;
            font-size: 14px;
        }

        select {
            background:  #1F1D2B;
        }


    }
</style>
