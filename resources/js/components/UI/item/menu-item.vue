<script setup>
import {useMenuItem} from "../../../helper/menu_payment_item.js";
import AddIcon from "../../icons/add-icon.vue";
import {ref} from "vue";

const props = defineProps({
  menuItem: Object
})

const {addToPayment} = useMenuItem();
const active = ref(false);
const color = ref("#393C49");

const path = import.meta.env.VITE_APP_IMAGE_PATH;

console.log(props.menuItem)

const addDish = () => {
  addToPayment(props.menuItem);
  active.value = true;
  color.value = "#fff";

}
</script>

<template>
  <div class="menu-inner__item">
    <img :src="path + menuItem.img_path" alt="">

    <div class="menu-item__text">
      <p class="item-name">{{ menuItem.title }}</p>
      <p class="item-price">$ {{ menuItem.price }}</p>
      <p class="item-count">{{ menuItem.count }} Bowls available</p>
    </div>

    <button @click="addDish" :class="active ? 'active-btn' : ''" class="menu-item__btn text-input">
      <add-icon :color="color"/>
    </button>
  </div>
</template>

<style lang="scss">
.menu-item__btn {
  display: flex;
  align-items: center;
  padding: 16px;
  border-radius: 8px;
  margin: 24px auto 0;
  cursor: pointer;
}

.active-btn {
  background: var(--primary-color) !important;
  border: 2px solid var(--primary-color);
}

</style>
