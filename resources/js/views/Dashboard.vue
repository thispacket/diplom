<script setup>
import TitleText from "../components/UI/text/title-text.vue";
import SubtitleText from "../components/UI/text/subtitle-text.vue";
import DashboardOrderCard from "../components/UI/item/dashboard-order-card.vue";
import OrderReport from "../components/UI/layout/order-report.vue";
import MostOrdered from "@/components/UI/layout/most-ordered.vue";
import TypeOfOrder from "../components/UI/layout/type-of-order.vue";
import CoinIcon from "../components/icons/coin-icon.vue";
import BookmarkIcon from "../components/icons/bookmark-icon.vue";
import UserIcon from "../components/icons/user-icon.vue";
</script>

<template>
  <div class="dashboard-page">
    <div class="dashboard-page__inner">
      <div class="dashboard-page__content">
        <div class="dashboard-header">
          <title-text text="Dashboard"/>
          <subtitle-text text="Tuesday, 2 Feb 2021"/>
        </div>

        <div class="divider"></div>

        <div class="order-cards">
          <dashboard-order-card
            title="Total Revenue"
            cost="$10,243.00"
            :Icon="CoinIcon"
            :percent="+32.40"
            color="#9288E0"
          />
          <dashboard-order-card
            title="Total Dish Ordered"
            cost="23,456"
            :Icon="BookmarkIcon"
            :percent="-12.40"
            color="#FFB572"
          />
          <dashboard-order-card
            title="Total Customer"
            cost="1,234"
            :Icon="UserIcon"
            :percent="+2.40"
            color="#65B0F6"
          />
          <order-report/>
        </div>

      </div>

      <div class="dashboard-page__info">
        <most-ordered/>
        <type-of-order/>
      </div>
    </div>


  </div>
</template>

<style lang="scss">
  .dashboard-page {
    overflow: hidden;
    width: 100%;
    padding: 24px;


    &__inner {
      display: flex;
      justify-content: space-between;
      gap: 24px;
      height: calc(100vh - 48px);
    }

    &__content {
      position: relative;
      width: 100%;

      .order-cards {
        margin-top: 24px;
        display: flex;
        justify-content: space-between;
      }
    }

    &__info {
      position: relative;
      width: 800px;
    }

    .dashboard-header .sub-title {
      margin-top: 4px;
    }
  }
</style>
