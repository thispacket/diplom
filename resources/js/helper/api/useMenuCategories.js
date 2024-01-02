import {ref} from "vue";

export const useMenuCategories = () => {
    const menuCategories = ref([]);

    const getMenuCategories = () => {
        return axios({
            method: 'GET',
            url: '/api/menu/categories',
        })
        .then(response => menuCategories.value = response.data)
        .catch(err => console.log(err))
    }

    const sendMenuCategories = () => {
        // TODO: send menu categories
    }

    const deleteMenuCategory = id => {
        // TODO: delete menu category
    }

    return {
        menuCategories,
        getMenuCategories,
        sendMenuCategories,
        deleteMenuCategory
    }

}
