import {ref} from "vue";


const order = ref();
const isConfirm = ref(false)
export const useOrder = () => {

  const changeConfirm = () => {
    isConfirm.value = !isConfirm.value
  }

  return {
    changeConfirm,
    isConfirm,
    order,
  };
}
