<template>
  <template v-if="menuItemIsNotEmpty && menuCategoryIsNotEmpty">
    <div class="home-page">
      <div class="home-content">
        <v-header/>
        <menu-list/>
      </div>
    </div>

    <order-sidebar v-if="menuPaymentItemIsNotEmpty && !isConfirm"/>
    <confirmation-payment v-if="isConfirm"/>
  </template>

  <loader
    v-else
    color="white"
    size="58"/>

</template>

<script setup>
import OrderSidebar from "../components/UI/layout/order-sidebar.vue";
import MenuList from "../components/UI/layout/menu-list.vue";
import VHeader from "../components/UI/layout/v-header.vue";
import {useMenuItem} from "../helper/menu_payment_item.js";
import {IconLoader2} from '@tabler/icons-vue';
import {useMenuItems} from "../helper/api/menu_items.js";
import {useMenuCategories} from "../helper/api/menu_categories.js";
import ConfirmationPayment from "../components/UI/layout/confirmation-payment.vue";
import {useOrder} from "../helper/api/order.js";
import {computed} from "vue";
import Loader from "@/components/svg/loader.vue";

const {menuPaymentItems} = useMenuItem();
const {menuItems} = useMenuItems();
const {menuCategories} = useMenuCategories();
const {isConfirm} = useOrder();

const menuItemIsNotEmpty = computed(() => menuItems.value && menuItems.value.length);
const menuCategoryIsNotEmpty = computed(() => menuCategories.value && menuCategories.value.length);
const menuPaymentItemIsNotEmpty = computed(() => menuPaymentItems.value && menuPaymentItems.value.length);

</script>

<style lang="scss">
.home-page {
  width: 100%;
  padding: 28px;
  display: flex;
  position: relative;


  .sub-title {
    margin-top: 4px;
  }

  .home-content {
    width: 100%;
  }
}

</style>
