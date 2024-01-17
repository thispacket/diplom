<script setup>

import TitleText from "../text/title-text.vue";
import FilterButton from "../layout/filter-button.vue";
import DropdownIcon from "../../icons/dropdown-icon.vue";
import MostOrderedMenuItem from "../item/most-ordered-menu-item.vue";
</script>

<template>
  <div class="most-ordered">
    <div class="most-ordered__header">
      <title-text text="Most Ordered"/>
      <filter-button>
        <dropdown-icon/>
        <p>Today</p>
      </filter-button>
    </div>

    <div class="divider"></div>

    <div class="most-ordered__content">
      <most-ordered-menu-item v-for="i in 3"/>
    </div>

    <button class="most-ordered__button">View All</button>
  </div>
</template>

<style scoped lang="scss">
.most-ordered {
  width: 100%;
  top: 0;
  position: absolute;
  background: var(--base-dark-one);
  border-radius: 8px;
  padding: 24px;

  &__button {
    width: 100%;
    background: inherit;
    border: 2px solid var(--primary-color);
    border-radius: 8px;
    color: var(--primary-color);
    font-weight: 600;
    font-size: 16px;
    padding: 16px;
    margin-top: 32px;
    cursor: pointer;
  }

  &__header {
    display: flex;
    justify-content: space-between;
    align-items: center;

    .title {
      font-size: 24px;
    }
  }

  &__content {
    margin-top: 24px;
    display: flex;
    flex-direction: column;
    row-gap: 24px;
  }
}
</style>
