<script setup>
    import { useWindowVisibility } from "../../helper/orderVisible.js";

    const menuItem = defineProps({
        path: String,
        name: String,
        price: String,
        count: String
    })

    const { changeWindowsVisibility } = useWindowVisibility();
</script>

<template>
    <div class="menu-inner__item" @click="changeWindowsVisibility">
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
