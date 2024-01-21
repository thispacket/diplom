<script setup>

import TitleText from "@/components/UI/text/title-text.vue";
import SettingNavigation from "@/components/UI/navigation/setting-navigation.vue";
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
      display: flex;
      gap: 24px;
    }
  }
</style>
