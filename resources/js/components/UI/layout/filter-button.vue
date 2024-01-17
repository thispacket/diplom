<script setup>

</script>

<template>
  <div class="filter">
    <slot/>
  </div>
</template>

<style lang="scss">
  .filter {
    display: flex;
    background: #1F1D2B;
    border-radius: 8px;
    padding: 16px;
    align-items: center;
    cursor: pointer;
    border: 1px solid #393C49;
    gap: 10px;

    p {
      color: white;
      font-family: "Barlow", sans-serif;
      font-weight: 500;
      font-size: 16px;
    }
  }


</style>
