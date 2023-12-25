<template>
    <div class="menu-inner">
        <div class="menu-inner__header">
            <title-text text="Choose Dishes"/>
            <dropdown-select/>
        </div>

        <div class="menu-inner__content">
            <menu-item
                v-for="i in 11"
                :key="i"
                name="Spicy seasoned seafood noodles"
                price="5.99"
                count="5"
                :path="path"
            />
        </div>
    </div>
</template>

<script setup>
    const path = import.meta.env.VITE_APP_IMAGE_PATH + 'pasta.png';

</script>

<style lang="scss" >
    .menu-inner {
        margin-top: 24px;

        &__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title {
            font-size: 20px
        }

        &__content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 24px;
        }


        &__item {
            background-color: var(--base-dark-one);
            width: calc(340px - 24px);
            border-radius: 16px;
            padding: 24px;
            margin-top: calc(58px * 2);



            img {
                width: 70%;
                border-radius: 50%;
                background-color: white;
                display: block;
                margin: -40% auto 0;
            }

            .menu-item__text {
                margin-top: 24px;
            }

            p {
                text-align: center;
                font-size: 20px;
                font-weight: 400;
                font-family: "Barlow", sans-serif;
                color: #ABBBC2;
            }

            .item-name {
                font-weight: 600;
            }

            .item-price, .item-count {
                margin-top: 24px;
            }
        }

        &__item::first-line {
            margin-left: 0;
        }
    }
</style>
