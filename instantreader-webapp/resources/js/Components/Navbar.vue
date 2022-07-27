<!-- 
    This is the topbar of the CRM. The sidebar will change according to the currently selected navigation link.
    This uses bootstrap for the styling.

    by: rmhizon
 -->

<template>
    <!-- NAVIGATION -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <span class="navbar-brand">
                <img
                    src="./img/logo.png"
                    alt="logo"
                    class="d-inline-block align-top"
                    width="300"
                />
            </span>

            <!-- toggler (mobile mode) -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#toggleMobileMenu"
                aria-controls="toggleMobileMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto text-center">
                    <li>
                        <Link
                            href="/crm/sales/contact-management"
                            class="nav-link px-5"
                            :class="{ active: $page.url.includes('/sales') }"
                            >Sales & Marketing</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="/crm/operations/bulletin-board"
                            class="nav-link px-5"
                            :class="{
                                active: $page.url.includes('/operations'),
                            }"
                            >Operations</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="/crm/admin/manage-users"
                            class="nav-link px-5"
                            :class="{ active: $page.url.includes('/admin') }"
                            >Admin</Link
                        >
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- END OF NAVIGATION -->
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
};
</script>

<style scoped>
.container-fluid {
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
}
.navbar-brand {
    margin-left: 30px;
    margin-right: 30px;
}

.active {
    font-weight: 500;
}
</style>
