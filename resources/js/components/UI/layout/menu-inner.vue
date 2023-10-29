<template>
    <div class="menu-inner">
        <div class="menu-inner__header">
            <title-text text="Choose Dishes"/>
            <dropdown-select/>
        </div>

        <div class="menu-inner__content">
            
        </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" >
    .menu-inner {
        margin-top: 24px;

        &__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title {
            font-size: 20px
        }
    }
</style>
