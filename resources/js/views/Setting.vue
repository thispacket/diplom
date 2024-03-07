<script setup>

import TitleText from "@/components/UI/text/title-text.vue";
import SettingNavigation from "@/components/UI/navigation/setting-navigation.vue";
import {onMounted} from "vue";
import router from "../router/index.js";

onMounted(() => {
  router.push( { name: 'products-management' } );
});
</script>

<template>
  <div class="setting-page">
    <title-text text="Settings"/>

    <div class="setting-page__inner">
      <setting-navigation/>
      <router-view/>
    </div>
  </div>
</template>

<style lang="scss">
  .setting-page {
    padding: 24px;
    height: 100vh;
    width: 100%;

    &__inner {
      position: relative;
      display: flex;
      gap: 24px;
      width: 100%;
      margin-top: 24px;
      height: calc(100% - 64px);
    }
  }
</style>
