<template>
    <header class="header">
        <div class="header-title">
            <title-text text="Jaegar Resto"/>
            <subtitle-text text="Tuesday, 2 Feb 2021"/>
        </div>
    
        <search-input/>
    </header>
</template>

<script setup>
    
</script>

<style lang="scss">
.header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;

    .search-input {
        display: flex;
        background-color: #2D303E;
        border: 1px solid #393C49;
        padding: 14px;
        border-radius: 8px;
        width: 500px;

        input {
            background-color: inherit;
            border: none;
            margin-left: 8px;
            font-size: 14px;
            font-family: "Barlow", sans-serif;
            color: white;
            width: 100%;
            font-weight: bold;
        }
        input:focus {
            outline: none;
        }   
    }
}
</style>
