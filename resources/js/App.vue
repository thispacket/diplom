<template>
    <navigation-sidebar/>
    <router-view/>
</template>

<script setup>
import NavigationSidebar from "../js/components/UI/navigation/navigation-sidebar.vue";
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&family=Rubik&family=Source+Code+Pro:wght@300&display=swap');

    :root {
        --base-dark-one: #1F1D2B;
        --base-dark-two: #252836;
        --primary-color: #EA7C69;
    }

    * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        box-sizing: border-box;
        transition: all .2s linear;
    }

    *:hover {
        transition: all .2s linear;
    }

    #app {
        display: flex;
        width: 100%;
    }
</style>
