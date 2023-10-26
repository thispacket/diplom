<template>
    <div class="category-navigation">
        <div class="buttons">
            <button class="category-navigation__button active">Hot dishes</button>
            <button class="category-navigation__button">Hot dishes</button>
            <button class="category-navigation__button">Hot dishes</button>
            <button class="category-navigation__button">Hot dishes</button>
            <button class="category-navigation__button">Hot dishes</button>
            <button class="category-navigation__button">Hot dishes</button>
        </div>

        <div class="divider">

        </div>
    </div>
</template>

<script setup>

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
            width: 36px;
            background: var(--primary-color);
            display: block;
            margin-top: 13px;
            position: absolute;
            border-radius: 2px;
        }

        &__button:first-child {
            margin-left: 0;
        }

        .divider {
            width: 100%;
            height: 1px;
            background: #393C49;
            margin-top: 14px;
        }
    }
</style>
