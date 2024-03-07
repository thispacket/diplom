<script setup>

import TitleText from "../../components/UI/text/title-text.vue";
import ManagementMenuList from "../../components/UI/layout/management-menu-list.vue";
import OptionIcon from "../../components/icons/option-icon.vue";
import Loader from "@/components/svg/loader.vue";
import {onMounted, ref} from "vue";
import {useOrder} from "@/helper/api/order.js";



const isLoaded = ref(false);

onMounted(() => {
  setInterval(() => {
    isLoaded.value = true
  }, 1000)
})
</script>

<template>
  <section class="products-management">
    <template v-if="isLoaded">
      <header class="products-management__header">
        <title-text text="Products Management"/>
        <button class="products-management__button">
          <option-icon color="white"/>
          <span>Manage Categories</span>
        </button>
      </header>

      <management-menu-list/>
    </template>

    <loader
      v-else
      color="#EA7C69"
      size="58"/>

  </section>
</template>

<style lang="scss">
.products-management {
  position: absolute;
  width: calc(100% - 20% - 24px);
  right: 0;
  border-radius: 8px;
  padding: 24px;
  background: var(--base-dark-one);
  height: 100%;
  overflow-y: scroll;

  &::-webkit-scrollbar {
    width: 4px;
  }

  &::-webkit-scrollbar-track {
  }

  &::-webkit-scrollbar-thumb {
    border-radius: 6px;
    background: var(--primary-color);

  }


  &__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  &__button {
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 15px 22px;
    border-radius: 8px;
    background: var(--base-dark-one);
    color: white;
    border: 2px solid var(--base-dark-two);
    font-size: 18px;
    font-weight: 500;
  }

  .title {
    font-size: 24px;
  }
}
</style>
