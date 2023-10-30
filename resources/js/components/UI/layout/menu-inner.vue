<template>
    <div class="menu-inner">
        <div class="menu-inner__header">
            <title-text text="Choose Dishes"/>
            <dropdown-select/>
        </div>

        <div class="menu-inner__content">
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
            <div class="menu-inner__item">
                <img src="" alt="">
                <div class="menu-item__text">
                    <p class="item-name">Spicy seasoned seafood noodles</p>
                    <p class="item-price">$ 2.29</p>
                    <p class="item-count">20 Bowls available</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

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
            column-gap: 28px;
        }

        &__item {
            background-color: var(--base-dark-one);
            border-radius: 16px;
            padding: 24px;
            gap: 28px;
            margin-top: calc(58px + 24px);


            img {
                width: 132px;
                height: 132px;
                border-radius: 50%;
                background-color: white;
                display: block;
                margin: -50% auto 0;
            }

            .menu-item__text {
                margin-top: 16px;
            }

            p {
                color: #ABBBC2;
                text-align: center;
                font-size: 14px;
                font-weight: 500;
                width: 144px;
                font-family: "Barlow", sans-serif;
                color: #ABBBC2;
            }

            .item-name {
                font-weight: 600;
            }

            .item-price, .item-count {
                margin-top: 8px;
            }
        }

        &__item::first-line {
            margin-left: 0;
        }
    }
</style>
