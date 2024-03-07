<script setup>

import CategoryNavigation from "../navigation/category-navigation.vue";
import ManagementMenuItem from "@/components/UI/item/management-menu-item.vue";
import AddIcon from "@/components/icons/add-icon.vue";
import {ref} from "vue";
import {useMenuItems} from "../../../helper/api/menu_items.js";

const color = ref('#fff');

const {menuItems} = useMenuItems();

</script>

<template>
  <div class="management-menu-list">
    <category-navigation />

    <div class="management-menu-list__inner">
      <div @mousemove="color = '#EA7C69'" @mouseleave="color = '#fff'" class="management-menu-list__item-add">
        <add-icon :color="color"/>

        <p>Add new dish</p>
      </div>

      <management-menu-item
        v-for="(menuItem, index) in menuItems"
        :key="index"
        :menuItem="menuItem"/>
    </div>
  </div>
</template>

<style lang="scss">
  .management-menu-list {
    position: relative;
    width: 100%;
    height: 100%;

    &__item-add {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: var(--primary-color);
      border: 2px dashed white;
      border-radius: 8px;
      cursor: pointer;

      &:hover {
        border-color: var(--primary-color);

        p {
          color: var(--primary-color);
        }
      }

      p {
        color: white;
        margin-top: 16px;
        font-weight: 600;
      }
    }

    &__inner {
      margin-top: 24px;
      width: 100%;
      position: absolute;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 24px;
      height: 100%;
    }
  }
</style>
