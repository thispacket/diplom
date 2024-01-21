<script setup>

import SettingNavItem from "@/components/UI/item/setting-nav-item.vue";
import AppereanceIcon from "@/components/icons/appereance-icon.vue";
</script>

<template>
  <div class="setting-navigation">
    <setting-nav-item :Icon="AppereanceIcon" title="Appearance" subtitle="Change appereance settings"/>
    <setting-nav-item :Icon="AppereanceIcon" title="Appearance" subtitle="Change appereance settings"/>
    <setting-nav-item :Icon="AppereanceIcon" title="Appearance" subtitle="Change appereance settings" active="true"/>
    <setting-nav-item :Icon="AppereanceIcon" title="Appearance" subtitle="Change appereance settings"/>
    <setting-nav-item :Icon="AppereanceIcon" title="Appearance" subtitle="Change appereance settings"/>
    <setting-nav-item :Icon="AppereanceIcon" title="Appearance" subtitle="Change appereance settings"/>
    <setting-nav-item :Icon="AppereanceIcon" title="Appearance" subtitle="Change appereance settings"/>
  </div>
</template>

<style lang="scss">
  .setting-navigation {
    display: flex;
    flex-direction: column;
    background: var(--base-dark-one);
    border-radius: 8px;
    height: 100%;
    width: 20%;
    margin-top: 24px;
  }
</style>
