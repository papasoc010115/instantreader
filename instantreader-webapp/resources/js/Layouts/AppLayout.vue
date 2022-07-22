<!-- 
    This is the layout of the single page application (SPA).
    This includes the topbar and the sidebar for all views of the SPA.
    This makes the margins and paddings 0 initially to give the other developers the freedom to set their own.
    This sets a layer of abstraction for the other developers. This automatically places the pages on the content area.
    How to use: Surround your content with this layout tags. 
    Example: <AppLayout>Page Content</AppLayout>
    Note: AVOID TOUCHING THIS FILE. Edit the views under resources/js/Pages and edit the components under resources/js/Components

    by rmhizon  
 -->

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
    width: 100%;
}
.content {
    padding: 0 !important;
    margin: 0 !important;
}
</style>
