import {onMounted, ref} from "vue";
import {useMenuItems} from "../api/useMenuItems.js";

export const useMenuCategories = () => {
  const { getMenuItemsByCategory } = useMenuItems();
  const menuCategories = ref([]);
  const currentCategory = ref();

  const getMenuCategories = () => {
    return axios({
      method: 'GET',
      url: '/api/menu/categories',
    })
      .then(response => menuCategories.value = response.data)
      .catch(err => console.log(err))
  }

  const getMenuCategory = id => {
    return axios({
      method: 'GET',
      url: `/api/menu/categories/${id}`,
    })
      .then(response => {
        return response.data;
      })
      .catch(err => console.log(err));
  }

  const sendMenuCategories = () => {
    // TODO: send menu categories
  }

  const deleteMenuCategory = id => {
    // TODO: delete menu category
  }

  const setCurrentCategory = category => {
    currentCategory.value = category;

    if (currentCategory.value?.id !== undefined) {
      getMenuItemsByCategory(currentCategory.value?.id)
    }

  }

  onMounted(() => {
    getMenuCategories()
  })

  return {
    menuCategories,
    currentCategory,
    getMenuCategories,
    getMenuCategory,
    sendMenuCategories,
    deleteMenuCategory,
    setCurrentCategory,
  }

}
