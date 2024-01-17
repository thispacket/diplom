<script setup>

const path = import.meta.env.VITE_APP_IMAGE_PATH;

</script>

<template>
  <div class="most-ordered__menu-item">
    <img :src="path + 'img_1.png'" alt="123">

    <div class="most-ordered__menu-item-info">
      <p class="most-ordered__menu-item-name">Spicy seasoned seafood noodles</p>
      <p>200 dishes ordered</p>
    </div>
  </div>
</template>

<style lang="scss">
.most-ordered__menu-item {
  width: 100%;
  display: flex;
  align-items: center;
  gap: 16px;

  img {
    width: 58px;
  }

  &-name {
    color: #E0E6E9;
    font-weight: 500;
    font-size: 20px;
  }

  &-info {
    color: #ABBBC2;
    font-size: 18px;
  }
}
</style>
