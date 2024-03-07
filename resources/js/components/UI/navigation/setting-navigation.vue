<script setup>

import SettingNavItem from "../item/setting-nav-item.vue";
import AppereanceIcon from "@/components/icons/appereance-icon.vue";
import SecurityIcon from "../../icons/security-icon.vue";
import RestaurantIcon from "../../icons/restaurant-icon.vue";
import DiscountIcon from "../../icons/discount-icon.vue";
import NotifivationIcon from "../../icons/notifivation-icon.vue";
import AboutIcon from "../../icons/about-icon.vue";


// TODO: доделать навигацию по настройкам
</script>

<template>
  <div class="setting-navigation">
    <router-link :to="{name: 'appearance'}">
      <setting-nav-item :active="$route.name === 'appearance'" :Icon="AppereanceIcon" title="Appearance" subtitle="Change appereance settings"/>
    </router-link>

    <router-link :to="{name: 'your-restaurant'}">
      <setting-nav-item :active="$route.name === 'your-restaurant'" :Icon="RestaurantIcon" title="Your Restaurant" subtitle="Dark and Light mode, Font size"/>
    </router-link>

    <router-link :to="{name: 'products-management'}">
      <setting-nav-item :active="$route.name === 'products-management'" :Icon="DiscountIcon" title="Products Management" subtitle="Manage your product, pricing, etc"/>
    </router-link>

    <router-link :to="{name: 'notifications'}">
      <setting-nav-item :active="$route.name === 'notifications'" :Icon="NotifivationIcon" title="Notifications" subtitle="Customize your notifications"/>
    </router-link>

    <router-link :to="{name: 'security'}">
      <setting-nav-item :active="$route.name === 'security'" :Icon="SecurityIcon" title="Security" subtitle="Configure Password, PIN, etc"/>
    </router-link>

    <router-link :to="{name: 'about-us'}">
      <setting-nav-item :active="$route.name === 'about-us'" :Icon="AboutIcon" title="About Us" subtitle="Find out more about Posly"/>
    </router-link>
  </div>
</template>

<style lang="scss">
  .setting-navigation {
    position: absolute;
    display: flex;
    flex-direction: column;
    background: var(--base-dark-one);
    border-radius: 8px;
    height: 100%;
    width: 20%;

    a:first-child {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }

    a:last-child {
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
    }
  }
</style>
