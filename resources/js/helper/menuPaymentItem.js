import {ref} from "vue";
import {useWindowVisibility} from "./orderVisible.js";

const menuPaymentItems = ref([]);
export const useMenuItem = () => {
  const {display} = useWindowVisibility();
  const addToPayment = item => {
    menuPaymentItems.value.push(item);
    }

    const removeFromPayment = item => {
      menuPaymentItems.value = menuPaymentItems.value.filter(menuItem => menuItem !== item);
      if (menuPaymentItems.value.length === 0) display.value = "none";
    }

    return {
        menuPaymentItems,
        addToPayment,
        removeFromPayment
    }
}
