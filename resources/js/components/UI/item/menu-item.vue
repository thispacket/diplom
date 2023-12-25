<script setup>
    import { useWindowVisibility } from "../../helper/orderVisible.js";
    import { useMenuItem } from "../../helper/menuItem.js";

    const menuItem = defineProps({
        path: String,
        name: String,
        price: String,
        count: String
    })

    const { changeWindowsVisibility } = useWindowVisibility();
    const { addToPayment } = useMenuItem();

    const addDish = () => {
        addToPayment(menuItem);
        changeWindowsVisibility();
    }
</script>

<template>
    <div class="menu-inner__item" @click="addDish">
        <img :src="menuItem.path" alt="">

        <div class="menu-item__text">
            <p class="item-name">{{ menuItem.name }}</p>
            <p class="item-price">$ {{ menuItem.price }}</p>
            <p class="item-count">{{ menuItem.count }} Bowls available</p>
        </div>
    </div>
</template>

<style scoped lang="scss">

</style>
