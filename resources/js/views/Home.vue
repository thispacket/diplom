<template>
    <div class="home-page">
        <div class="home-content">
            <v-header/>
            <menu-list/>
        </div>
    </div>
    <order-sidebar/>
</template>

<script setup>
import OrderSidebar from "../components/UI/layout/order-sidebar.vue";
import MenuList from "../components/UI/layout/menu-list.vue";
import VHeader from "../components/UI/layout/v-header.vue";


</script>

<style lang="scss">
    .home-page {
        padding: 28px;
        width: 100%;
        display: flex;


        .sub-title {
            margin-top: 4px;
        }
    }
</style>
