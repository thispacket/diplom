import {onMounted, ref} from "vue";

const menuItems = ref({});
export const useMenuItems = () => {
  const getMenuItems = () => {
    return axios({
      method: 'GET',
      url: '/api/v1/menu',
    })
      .then(response => {
        menuItems.value = response.data.data
      })
      .catch(err => console.log(err))
  }
  const getMenuItem = id => {
    return axios({
      method: 'GET',
      url: `api/v1/menu/item/${id}`,
    })
      .then(response => {
        return response.data;
      })
      .catch(err => console.log(err));
  }
  const sendMenuItem = menuItem => {
    return axios({
      method: 'POST',
      url: 'api/v1/menu/item',
      data: menuItem,
    }).then(()=> getMenuItems())
      .catch(err => console.log(err));
  }
  const deleteMenuItem = id => {
    return axios({
      method: 'DELETE',
      url: `api/v1/menu/item/${id}`,
    })
      .then(response => {
        return response.data;
      })
      .catch(err => console.log(err));
  }
  const updateMenuItem = menuItem => {
    return axios({
      method: 'PUT',
      url: `api/v1/menu/item/${menuItem.id}`,
      data: menuItem
    }).catch(err => console.log(err));
  }
  const getMenuItemsByCategory = categoryId => {
    return axios({
      method: 'GET',
      url: `api/v1/menu/item/category/${categoryId}`,
    })
      .then(response => {
        menuItems.value = response.data.data;
      })
      .catch(err => console.log(err));
  }

  onMounted(() => {
    setTimeout(() => {
      getMenuItems()
    }, 1000)
  })

  return {
    menuItems,
    getMenuItems,
    getMenuItem,
    sendMenuItem,
    deleteMenuItem,
    getMenuItemsByCategory,
    updateMenuItem
  }
}
