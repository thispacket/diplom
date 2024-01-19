<script setup>

const props = defineProps({
  id: String,
  label: String,
  placeholder: String,
  type: String,
  value: String
});

</script>

<template>
  <div class="form-field">
    <label :for="id" class="form-field__label">{{ label }}</label>
    <input :id="id" class="form-field__input" :placeholder="placeholder" :type="type" :value="value">
  </div>
</template>

<style lang="scss">
.form-field {
  width: 100%;

  &__label {
    color: white;
    font-weight: 500;
    font-size: 18px;
  }

  &__input {
    width: 100%;
    margin-top: 12px;
    background: #2D303E;
    border-radius: 8px;
    border: 2px solid #393C49;
    padding: 14px;
    font-size: 18px;
    color: #E0E6E9;
  }

  &__input:focus {
    outline: none;
  }
}
</style>
