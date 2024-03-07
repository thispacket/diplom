<script setup>

const props = defineProps({
  Icon: Object,
  title: String,
  subtitle: String,
  active: Boolean
});

</script>

<template>
  <div class="setting-navigation__item" :class="active && 'setting-navigation__item-active'">
    <component :color=" active ? '#EA7C69' : '#ABBBC2'" :is="Icon"/>
    <div>
      <p class="setting-navigation__item-title">{{ title }}</p>
      <p class="setting-navigation__item-subtitle">{{ subtitle }}</p>
    </div>
  </div>
</template>

<style lang="scss">
  .setting-navigation__item-active {
    background: rgba(234, 124, 105, .26);

    .setting-navigation__item-title {
      color: var(--primary-color);
    }

    &::after {
      content: '';
      display: flex;
      height: 50%;
      position: absolute;
      top: 25%;
      border-radius: 30px;
      right: 0;
      width: 4px;
      background: var(--primary-color);
    }
  }

  .setting-navigation__item {
    position: relative;
    cursor: pointer;
    display: flex;
    align-items: start;
    gap: 16px;
    padding: 30px 24px;



    &-title {
      color: white;
      font-size: 16px;
      font-weight: 500;
    }

    &-subtitle {
      color: #ABBBC2;
      font-size: 14px;
      margin-top: 4px;
    }
  }
</style>
