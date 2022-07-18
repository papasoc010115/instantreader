<template>
    <Navbar />
    <section>
        <slot />
    </section>
</template>

<script>
import Navbar from "../Components/Navbar.vue";

export default {
    components: {
        Navbar,
    },
};
</script>

<style></style>
