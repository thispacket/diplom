<template>
    <svg :width="size" :height="size" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 9.00002C1.25 6.37666 3.37665 4.25002 6 4.25002H18C20.6234 4.25002 22.75 6.37666 22.75 9.00002V15C22.75 17.6234 20.6234 19.75 18 19.75H6C3.37665 19.75 1.25 17.6234 1.25 15V9.00002ZM21.163 8.25002C20.8245 6.81667 19.5368 5.75002 18 5.75002H6C4.46321 5.75002 3.17555 6.81667 2.83697 8.25002H21.163ZM2.75 9.75002V15C2.75 16.7949 4.20507 18.25 6 18.25H18C19.7949 18.25 21.25 16.7949 21.25 15V9.75002H2.75ZM13.25 15C13.25 14.5858 13.5858 14.25 14 14.25H18C18.4142 14.25 18.75 14.5858 18.75 15C18.75 15.4142 18.4142 15.75 18 15.75H14C13.5858 15.75 13.25 15.4142 13.25 15Z" :fill="color"/>
    </svg>
</template>

<script setup>
defineProps({
    color: {
        type: String,
        default: "#EA7C69"
    },
    size: {
        type: String,
        default: "24"
    },
})
</script>

<style lang="scss" scoped></style>

