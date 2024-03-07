<script setup>

import EditIcon from "../../icons/edit-icon.vue";

const path = import.meta.env.VITE_APP_IMAGE_PATH;

const props = defineProps({
  menuItem: Object
})

</script>

<template>
  <div class="management-menu-list__item">
    <img class="management-menu-list__item-img" :src="path + menuItem.img_path" alt="">

    <p class="management-menu-list__item-title">{{ menuItem.title }}</p>

    <div class="management-menu-list__item-info">
      <p class="management-menu-list__item-price"> ${{ menuItem.price }} </p>
      <div></div>
      <p class="management-menu-list__item-count">{{ menuItem.count }} Bowls</p>
    </div>

    <button class="management-menu-list__item-button">
      <edit-icon/>
      Edit dish
    </button>
  </div>
</template>

<style lang="scss">
  .management-menu-list__item {
    border-radius: 8px;
    border: 2px solid var(--base-dark-two);
    height: 350px;
    display: flex;
    align-items: center;
    flex-direction: column;
    cursor: pointer;
    color: white;
    position: relative;



    &-img {
      margin-top: 24px;
      width: 50%;
    }

    &-title {
      margin-top: 16px;
      width: 50%;
      text-align: center;
      font-weight: 500;
    }

    &-info {
      color: #ABBBC2 !important;
      display: flex;
      align-items: center;
      margin-top: 16px;
      gap: 8px;

      div {
        width: 5px;
        height: 5px;
        background: #ABBBC2;
        border-radius: 50%;
      }
    }

    &-button {
      position: absolute;
      margin-top: 16px;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
      padding: 16px 0;
      background: rgba(234, 124, 105, .26);
      color: var(--primary-color);
      border: none;
      border-radius: 0 0 7px 7px;
      cursor: pointer;
      font-weight: 600;
      font-size: 16px;
      bottom: 0;
    }
  }
</style>
