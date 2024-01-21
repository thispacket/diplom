<template>
    <div class="navigation-sidebar">
        <div class="navigation-sidebar__inner">
            <div class="logo">
                <restaurant-icon size="30" />
            </div>

            <div class="icon-item" :class="$route.name === 'home' ? 'active' : ''">
                <router-link to="/">
                    <home-icon class="icon" size="28"/>
                </router-link>
            </div>

            <div class="icon-item" :class="$route.name === 'discount' ? 'active' : ''">
                <router-link to="/discount">
                    <discount-icon size="28" />
                </router-link>
            </div>

            <div class="icon-item" :class="$route.name === 'dashboard' ? 'active' : ''">
              <router-link to="/dashboard">
                <dashboard-icon size="28"/>
              </router-link>
            </div>

            <div class="icon-item">
                <message-icon size="28"/>
            </div>

            <div class="icon-item">
                <notifivation-icon size="28"/>
            </div>

            <div class="icon-item">
              <router-link :to="{name: 'setting'}">
                <setting-icon size="28"/>
              </router-link>
            </div>

            <div class="icon-item logout">
                <logout-icon size="28"/>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed, ref } from "vue";
import router from "@/router/index.js";
import SettingIcon from "@/components/icons/setting-icon.vue";
import NotifivationIcon from "@/components/icons/notifivation-icon.vue";
import MessageIcon from "@/components/icons/message-icon.vue";
import DashboardIcon from "@/components/icons/dashboard-icon.vue";
import DiscountIcon from "@/components/icons/discount-icon.vue";
import HomeIcon from "@/components/icons/home-icon.vue";
import RestaurantIcon from "@/components/icons/restaurant-icon.vue";
import LogoutIcon from "@/components/icons/logout-icon.vue";

const color = ref('#fff')
// let colorChange = computed(() => {
//
// })

</script>

<style lang="scss">
    #app {
        background: var(--base-dark-two);
    }

    .navigation-sidebar {
        background: var(--base-dark-one);
        //width: 8%;
        height: 100vh;
        padding: 24px;
        border-radius: 0 16px 16px 0;
        z-index: 1;
        position: sticky;
        left: 0;
        top: 0;
        bottom: 0;


        &__inner {
            display: flex;
            flex-direction: column;
            align-items: center;

            .logo {
                background: rgba($color: #EB966A, $alpha: .26);
                padding: 12px 12px 8px 12px;
                border-radius: 12px;
                margin-bottom: 46px;
            }

            .icon-item:not(.logout) {
                cursor: pointer;
                height: 102px;
                border-radius: 8px 0 0 8px;
                padding: 16px;
            }

            .logout {
                position: absolute;
                bottom: calc(0px + 12px);
                cursor: pointer;
                padding: 16px;
                border-radius: 8px;
            }
        }
    }


</style>

