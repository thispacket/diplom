<script setup>
  import Status from "@/components/UI/item/status.vue";

  const path = import.meta.env.VITE_APP_IMAGE_PATH;
</script>

<template>
  <tr class="content-table__row">
    <td class="customer-column">
      <img class="customer-image" :src="path + 'avatar.png'" alt="">
      <p class="customer-name">Eren Jaegar</p>
    </td>
    <td class="menu-column">
      <p>
        Spicy seasoned seafood noodles
      </p>
    </td>
    <td class="total-payment-column">
      <p>
        $125
      </p>
    </td>
    <td class="status-column">
      <status status="Preparing"/>
    </td>
  </tr>
</template>

<style lang="scss">
  .content-table__row {
    width: 100%;
    column-gap: 24px;

    p {
      color: #E0E6E9;
      font-size: 20px;
      font-weight: 300;
    }

    .menu-column p {
      width: 200px;
    }

    .customer-column, .menu-column, .total-payment-column, .status-column {
      margin-top: 32px;
    }

    .customer-column {
      display: flex;
      align-items: center;
      column-gap: 16px;

      .customer-name {
        font-size: 20px;
      }

      .customer-image {
        width: 40px;
      }
    }
  }


</style>
