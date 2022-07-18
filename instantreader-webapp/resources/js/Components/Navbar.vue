<template>
    <!-- NAVIGATION -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <Link href="crm" class="navbar-brand">
                <img
                    src="./img/logo.png"
                    alt="logo"
                    class="d-inline-block align-top"
                    width="300"
                />
            </Link>

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
                        <Link class="nav-link px-5">Sales & Marketing</Link>
                    </li>
                    <li>
                        <Link class="nav-link px-5">Operations</Link>
                    </li>
                    <li>
                        <Link class="nav-link px-5 active">Admin</Link>
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
