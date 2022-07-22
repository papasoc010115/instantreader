<template>
    <div v-if="show" class="float" @click="handleClick">
        <i class="btn-float fas fa-plus"></i>
    </div>
</template>

<script>
export default {
    props: ["show"],
    methods: {
        handleClick() {
            this.$emit("press");
        },
    },
};
</script>

<style scoped>
.float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #5a88ff;
    color: #fff;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    z-index: 1;
}

.float:hover {
    background-color: #5081fc;
    color: rgba(255, 255, 255, 0.945);
    cursor: pointer;
}

.btn-float {
    margin-top: 22px;
}
</style>
