<template>
    <div>
        <!-- NAVIGATION -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block">
                    <!-- hidden spacer to center brand on mobile --></span
                >
                <a class="navbar-brand d-none d-lg-inline-block" href="#">
                    SPA Test
                </a>
                <a
                    class="navbar-brand-two mx-auto d-lg-none d-inline-block"
                    href="#"
                >
                    <img src="//placehold.it/40?text=LOGO" alt="logo" />
                </a>
                <div class="w-100 text-right">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#myNavbar"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div
                class="collapse navbar-collapse flex-grow-1 text-right"
                id="myNavbar"
            >
                <ul class="navbar-nav ms-auto flex-nowrap">
                    <li class="nav-item">
                        <Link
                            href="test"
                            class="nav-link m-2 menu-item nav-active"
                            :class="{ active: $page.url === '/test' }"
                            >Page 1</Link
                        >
                    </li>
                    <li class="nav-item">
                        <Link
                            href="test2"
                            class="nav-link m-2 menu-item"
                            :class="{ active: $page.url === '/test2' }"
                            >Page 2</Link
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END OF NAVIGATION -->
        <section>
            <slot />
        </section>
    </div>
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
nav {
    padding: 0.5rem 2rem !important;
}
</style>
