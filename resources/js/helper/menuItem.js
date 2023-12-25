import {ref} from "vue";

const menuItems = ref([]);

export const useMenuItem = () => {
    const addToPayment = item => {
        menuItems.value.push(item);
    }

    return {
        menuItems,
        addToPayment
    }
}
