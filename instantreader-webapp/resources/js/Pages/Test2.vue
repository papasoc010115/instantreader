<template>
    <AppLayout>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1 class="display-1">ReadRight CRM Page 2</h1>
                    </center>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-12">
                    <center>
                        <p>
                            A Single Page Application Template by
                            <strong>
                                <i>UPLB Interns</i><i class="fas fa-heart"></i
                            ></strong>
                        </p>
                    </center>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <button
                        type="button"
                        @click="handleClick"
                        class="btn btn-lg btn-outline-dark"
                    >
                        Padayon!
                    </button>
                </div>
            </div>
            <br />
            <br />
            <center v-if="toggle">
                <h4>Let's get it!</h4>
            </center>
            <br />
            <br />
            <center>
                <Link href="test">Test SPA Route</Link>
            </center>
        </div>
    </AppLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import AppLayout from "../Layouts/AppLayout.vue";
export default {
    components: {
        Link,
        AppLayout,
    },
    data() {
        return {
            toggle: false,
        };
    },
    methods: {
        handleClick() {
            this.toggle = !this.toggle;
        },
    },
};
</script>

<style scoped>
.container {
    margin-top: 85px;
}
</style>
