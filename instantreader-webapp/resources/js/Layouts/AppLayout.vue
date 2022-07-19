<template>
    <Navbar />

    <div class="page container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <Sidebar />
            <!-- Page Content  -->
            <div class="content col-lg p-3 min-vh-100">
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../Components/Navbar.vue";
import Sidebar from "../Components/Sidebar.vue";

export default {
    components: {
        Navbar,
        Sidebar,
    },
};
</script>

<style>
.page {
    margin-top: 0.3%;
}
.content {
    padding: 1rem 3rem !important;
}
</style>
