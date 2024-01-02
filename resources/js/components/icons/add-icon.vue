<template>
    <svg :width="size" :height="size" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 3V12M12 21V12M12 12H21M12 12H3" :stroke="color" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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

