<template>
  <div class="menu-inner">
    <div class="menu-inner__header">
      <title-text text="Choose Dishes"/>
      <dropdown-select/>
    </div>

    <div class="menu-inner__content">
      <menu-item
        v-for="(menuItem) in menuItems"
        :key="menuItem.id"
        :menuItem="menuItem"
      />
    </div>
  </div>
</template>

<script setup>
import DropdownSelect from "../form/dropdown-select.vue";
import MenuItem from "../item/menu-item.vue";
import TitleText from "../text/title-text.vue";
import {useMenuItems} from "../../../helper/api/menu_items.js";

const {menuItems} = useMenuItems();

</script>

<style lang="scss">
.menu-inner {
  width: 100%;
  margin-top: 24px;

  &__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .title {
    font-size: 20px
  }

  &__content {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    grid-auto-rows: minmax(300px, auto);
    flex-wrap: wrap;
    grid-auto-flow: row dense;
    column-gap: 24px;
    row-gap: 24px;

    @media screen and (max-width: 790px)  {
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      grid-auto-rows: minmax(300px, auto);
    }

    @media screen and (max-width: 700px) {
      grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
      grid-auto-rows: minmax(300px, auto);
      justify-items: center;
    }

    @media screen and (max-width: 500px) {
      grid-template-columns: 1fr;
      justify-items: start;
    }
  }

  &__item {
    background-color: var(--base-dark-one);
    border-radius: 16px;
    padding: 24px;
    margin-top: calc(58px * 2);


    img {
      width: 70%;
      border-radius: 50%;
      background-color: white;
      display: block;
      margin: -40% auto 0;
    }

    .menu-item__text {
      margin-top: 24px;
    }

    p {
      text-align: center;
      font-size: 20px;
      font-weight: 400;
      font-family: "Barlow", sans-serif;
      color: #ABBBC2;
    }

    .item-name {
      font-weight: 600;
    }

    .item-price, .item-count {
      margin-top: 24px;
    }

    @media screen and (max-width: 700px) {
      width: 350px;
    }

    @media screen and (max-width: 500px) {
      width: 300px;
    }

  }

  &__item::first-line {
    margin-left: 0;
  }
}
</style>
