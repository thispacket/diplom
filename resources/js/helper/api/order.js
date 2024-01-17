import {ref} from "vue";


const order = ref();
const isConfirm = ref(true)
export const useOrder = () => {

  const confirm = () => {
    isConfirm.value = !isConfirm.value
  }

  return {
    confirm,
    isConfirm,
    order,
  };
}
