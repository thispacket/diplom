import {onMounted, ref} from "vue";
import {useMenuCategories} from "../../helper/api/useMenuCategories.js";

const menuItems = ref({});
export const useMenuItems = () => {
  const getMenuItems = () => {
    return axios({
      method: 'GET',
      url: '/api/menu',
    })
      .then(response => {
        menuItems.value = response.data
      })
      .catch(err => console.log(err))
  }
  const getMenuItem = id => {
    return axios({
      method: 'GET',
      url: `/api/menu/${id}`,
    })
      .then(response => {
        return response.data;
      })
      .catch(err => console.log(err));
  }
  const sendMenuItem = () => {

    // TODO: send menu items
  }
  const deleteMenuItem = id => {

    // TODO: delete menu item
  }
  const getMenuItemsByCategory = categoryId => {
    return axios({
      method: 'GET',
      url: `api/menu/item/category/${categoryId}`,
    })
      .then(response => {
        menuItems.value = response.data;
        console.log('метод',menuItems.value);
      })
      .catch(err => console.log(err));
  }

  // const getMenuItemsByCategory = categoryId => {
  //   menuItems.value.filter(item => {
  //     item.category_id === categoryId
  //     console.log(item)
  //   });
  //   console.log(menuItems.value);
  // }

  onMounted(() => {
    getMenuItems()
  })


  return {
    menuItems,
    getMenuItems,
    getMenuItem,
    sendMenuItem,
    deleteMenuItem,
    getMenuItemsByCategory
  }
}
