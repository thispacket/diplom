<script setup>
import TitleText from "../components/UI/text/title-text.vue";
import SubtitleText from "../components/UI/text/subtitle-text.vue";
import DashboardOrderCard from "../components/UI/item/dashboard-order-card.vue";
import OrderReport from "../components/UI/layout/order-report.vue";
import MostOrdered from "@/components/UI/layout/most-ordered.vue";
import TypeOfOrder from "../components/UI/layout/type-of-order.vue";
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
          <dashboard-order-card v-for="i in 3"/>
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
