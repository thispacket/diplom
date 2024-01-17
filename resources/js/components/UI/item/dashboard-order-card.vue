<script setup>

import CoinIcon from "../../icons/coin-icon.vue";
import ArrowUpIcon from "../../icons/arrow-up-icon.vue";
import TitleText from "../text/title-text.vue";
import SubtitleText from "@/components/UI/text/subtitle-text.vue";
</script>

<template>
  <div class="dashboard-order-card__item">
    <div class="stats">
      <coin-icon class="coin-icon" color="#9288E0" size="55"/>

      <div class="stats_percent">
        <span>+32.40%</span>
        <arrow-up-icon class="arrow-icon" color="#50D1AA"/>
      </div>
    </div>

    <title-text text="$10,243.00"/>

    <subtitle-text text="Total Revenue"/>
  </div>
</template>

<style lang="scss">
.dashboard-order-card__item {
  width: 30%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background: var(--base-dark-one);
  border-radius: 8px;
  padding: 20px;
  row-gap: 16px;

  .title {
    font-size: 40px;
  }

  .stats {
    display: flex;
    column-gap: 20px;

    .coin-icon {
      background: #252836;
      padding: 10px;
      border-radius: 8px;
    }

    .arrow-icon {
      background: rgba(136, 224, 145, .24);
      border-radius: 50%;
      padding: 4px;
    }

    &_percent {
      color: #50D1AA;
      display: flex;
      align-items: center;
      gap: 4px;
    }
  }
}
</style>
