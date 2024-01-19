<template>
  <blur v-if="isConfirm"/>
  <navigation-sidebar/>
  <router-view/>
</template>

<script setup>
import NavigationSidebar from "../js/components/UI/navigation/navigation-sidebar.vue";
import Blur from "./components/UI/blur.vue";
import {useOrder} from "./helper/api/order.js";
import {watch} from "vue";

const {isConfirm} = useOrder();

let html = document.querySelector('html')

watch(isConfirm, () => {
  html.style.overflow = isConfirm.value ? 'hidden' : 'auto'
})

</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&family=Rubik&family=Source+Code+Pro:wght@300&display=swap');

html::-webkit-scrollbar {
  width: 12px;
  background: var(--primary-color);
}

html::-webkit-scrollbar-track {
  background: var(--primary-color);
}

html::-webkit-scrollbar-thumb {
  border: 3px solid var(--base-dark-one);
  border-radius: 6px;
  background: var(--primary-color);

}

:root {
  --base-dark-one: #1F1D2B;
  --base-dark-two: #252836;
  --primary-color: #EA7C69;
}

* {
  padding: 0;
  margin: 0;
  text-decoration: none;
  box-sizing: border-box;
  transition: all .2s linear;
  font-family: "Barlow", sans-serif;
}

*:hover {
  transition: all .2s linear;
}

#app {
  position: relative;
  display: flex;
  width: 100%;
}

.text-input {
  background: var(--base-dark-two);
  color: white;
  font-size: 16px;
  padding: 14px;
  outline: none;
  border: 2px solid #393C49;
  border-radius: 8px;
}

.text-input::placeholder {
  color: #889898;
}
</style>
