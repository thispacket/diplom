<template>
    <h1 class="sub-title">{{ this.text }}</h1>
</template>

<script setup>
    defineProps({
        text: {
            type: String,
            default: 'subtitle'
        }
    })
</script>

<style lang="scss">
    .sub-title {
        font-size: 16px;
        font-family: "Barlow", sans-serif;
        font-weight: 600;
        color: #E0E6E9;
    }
</style>
