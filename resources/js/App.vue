<template>
    <navigation-sidebar/>
    <router-view/>
</template>

<script setup>

</script>

<style>
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
</style>
