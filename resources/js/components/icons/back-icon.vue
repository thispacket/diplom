<template>
    <svg :width="size" :height="size" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.5 16.5L4 12M4 12L8.5 7.5M4 12L20 12" :stroke="color" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</template>

<script setup>
defineProps({
    color: {
        type: String,
        default: "#EA7C69"
    },
    size: {
        type: String,
        default: "24"
    },
})
</script>

<style lang="scss" scoped></style>

