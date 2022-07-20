<template>
    <div class="background" v-if="show"></div>
</template>

<script>
export default {
    props: ["show"],
};
</script>

<style>
.background {
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
}
</style>
