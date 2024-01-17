<script setup>

import TitleText from "@/components/UI/text/title-text.vue";
import FilterButton from "@/components/UI/layout/filter-button.vue";
import DropdownIcon from "@/components/icons/dropdown-icon.vue";
import DineIn from "../../svg/dine-in.vue";

const path = import.meta.env.VITE_APP_IMAGE_PATH;
</script>

<template>
  <div class="most-type-of-order">
    <div class="most-type-of-order__header">
      <title-text text="Most Type of Order"/>
      <filter-button>
        <dropdown-icon/>
        <p>Today</p>
      </filter-button>
    </div>

    <div class="divider"></div>

    <div class="most-type-of-order__content">
      <div class="progress-bar__inner">
        <dine-in
          :progress="50"
          :radius="110"
          color="#65B0F6"
          opacity="15%"
        />
        <dine-in
          :progress="80"
          :radius="95"
          color="#FFB572"
          opacity="10%"
        />
        <dine-in
          :progress="1"
          :radius="80"
          color="#FF7CA3"
          opacity="15%"
        />
        <dine-in
          :radius="65"
          opacity="10%"
        />
      </div>

      <div class="content_map">
        <div class="content_map__item" v-for="i in 3">
          <div class="content_map__point"></div>
          <div class="content_map__item__info">
            <p class="name">Dine In</p>
            <p class="value">200 customers</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>

<style lang="scss">
.most-type-of-order {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: var(--base-dark-one);
  border-radius: 8px;
  padding: 24px;

  .title {
    font-size: 24px;
  }

  &__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  &__content {
    margin-top: 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;

    .progress-bar__inner {
      position: relative;
      width: 250px;
      height: 250px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .content_map {
      display: flex;
      flex-direction: column;
      row-gap: 20px;
      margin-right: 50px;

      &__item {
        display: flex;
        align-items: center;
        column-gap: 16px;

        .name {
          font-weight: 500;
          color: white;
          font-size: 18px;
        }

        .value {
          color: #ABBBC2;
          font-size: 16px;

        }
      }

      &__point {
        width: 30px;
        height: 30px;
        background: #FF7CA3;
        border-radius: 50%;
      }
    }
  }
}

</style>
