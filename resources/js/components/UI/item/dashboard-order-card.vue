<script setup>

import ArrowUpIcon from "../../icons/arrow-up-icon.vue";
import TitleText from "../text/title-text.vue";
import SubtitleText from "../text/subtitle-text.vue";
import {computed, ref} from "vue";

const props = defineProps({
  Icon: Object,
  cost: String,
  title: String,
  percent: Number,
  color: String
});

const percentRef = ref("")

const isPositiveOrNegative = computed(() => {
  return props.percent > 0 ? "#50D1AA" : "#FF7CA3";
})

if (props.percent > 0) percentRef.value = "+" + props.percent
else percentRef.value = props.percent;

</script>

<template>
  <div class="dashboard-order-card__item">
    <div class="stats">
      <component :is="Icon" class="coin-icon" :color="color" size="55"/>

      <div class="stats_percent">
        <span :style="{color: isPositiveOrNegative}">{{ percentRef }}%</span>
        <arrow-up-icon v-if="props.percent > 0" class="arrow-icon arrow-icon--positive" color="#50D1AA"/>
        <arrow-up-icon v-else class="arrow-icon arrow-icon--negative" color="#FF7CA3"/>
      </div>
    </div>

    <title-text :text="cost"/>

    <subtitle-text :text="title"/>
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
      border-radius: 50%;
      padding: 4px;

      &--positive {
        background: rgba(136, 224, 145, .24);
      }

      &--negative {
        background: rgba(255, 124, 163, .24);
        transform: rotate(180deg);
      }
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
