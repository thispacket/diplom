<script setup>
    defineProps({
        text: {
            type: String,
            default: 'Button'
        },
        active: {
            type: String,
            default: "Dine In"
        }
    })
</script>

<template>
    <button class="form-button" :class="active === text ? 'active-button' : ''">{{ text }}</button>
</template>

<style lang="scss">
    .form-button {
        border: 2px solid #393C49;
        background: inherit;
        padding: 7px 12px;
        border-radius: 8px;
        color: var(--primary-color);
        cursor: pointer;
        font-family: "Barlow", sans-serif;
        font-weight: 600;
        font-size: 14px;
    }

    .active-button {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }
</style>
