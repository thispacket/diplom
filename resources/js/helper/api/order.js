import {ref} from "vue";


const order = ref();
const isConfirm = ref(false)
export const useOrder = () => {

  const getOrders = () => {
    return axios({
      method: "GET",
      url: "/api/orders",
    }).then(response => {
      order.value = response.data.data
    }).catch(err => console.log(err))
  }

  const sendOrder = (order) => {
    return axios({
      method: "POST",
      url: "/api/orders",
      data: order
    }).catch(err => console.log(err))
  }

  const deleteOrder = (id) => {
    return axios({
      method: "DELETE",
      url: `/api/orders/${id}`,
    }).catch(err => console.log(err))
  }

  const updateOrder = (id, order) => {
    return axios({
      method: "PUT",
      url: `/api/orders/${id}`,
      data: order
    }).catch(err => console.log(err))
  }


  const changeConfirm = () => {
    isConfirm.value = !isConfirm.value
  }

  return {
    getOrders,
    sendOrder,
    deleteOrder,
    updateOrder,
    changeConfirm,
    isConfirm,
    order,
  };
}
