import {ref} from "vue";

const menuPaymentItems = ref([]);
export const useMenuItem = () => {
  const addToPayment = item => {
    if (menuPaymentItems.value.includes(item)) return;
    menuPaymentItems.value.push(item);
  }

  const removeFromPayment = item => {
    menuPaymentItems.value = menuPaymentItems.value.filter(menuItem => menuItem !== item);
  }

  return {
    menuPaymentItems,
    addToPayment,
    removeFromPayment
  }
}
