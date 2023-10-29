<template>
    <h1 class="title">{{ this.text }}</h1>
</template>

<script setup>
    defineProps({
        text: {
            type: String,
            default: 'title'
        }
    })
</script>

<style lang="scss">
    .title {
        font-size: 32px;
        font-family: "Barlow", sans-serif;
        color: white;
        font-weight: 600;
    }
</style>
