import {ref} from "vue";

const display = ref('none');

export const useWindowVisibility = () => {
    const changeWindowsVisibility = () => {
        display.value = "block";
    }
    return {
        display,
        changeWindowsVisibility
    }
}
