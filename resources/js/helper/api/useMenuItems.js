import {ref} from "vue";

export const useMenuItems = () => {
    const menuItems = ref([]);

    const getMenuItems = () => {
        return axios({
            method: 'GET',
            url: '/api/menu',
        })
        .then(response => menuItems.value = response.data)
        .catch(err => console.log(err))
    }

    const sendMenuItems = () => {
        // TODO: send menu items
    }

    const deleteMenuItem = id => {
        // TODO: delete menu item
    }

    return {
        menuItems,
        getMenuItems,
        sendMenuItems,
        deleteMenuItem
    }
}
