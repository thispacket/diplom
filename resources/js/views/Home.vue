<template>
  <template v-if="menuItems && menuItems.length && menuCategories && menuCategories.length">
    <div class="home-page">
      <div class="home-content">
        <v-header/>
        <menu-list/>
      </div>
    </div>

    <order-sidebar v-if="menuPaymentItems && menuPaymentItems.length"/>
    <confirmation-payment/>
  </template>

  <icon-loader2 v-else class="loader" color="white" size="58"/>
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

const {menuPaymentItems} = useMenuItem();
const {menuItems} = useMenuItems();
const {menuCategories} = useMenuCategories();

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

.loader {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
}

.loader {
  animation: rotate 1s linear infinite;
}

@keyframes rotate {
  100% {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}

</style>
