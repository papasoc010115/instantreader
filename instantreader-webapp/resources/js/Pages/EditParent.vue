<!-- Template by: ecdcabalda -->
<!-- Used by: sclee -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="p-5 form-container">
                    <!-- Header with Back Button -->
                    <div class="form-title-container">
                        <Link href="/crm/admin/manage-classrooms/students" class="btn btn-circle" id="back-btn">
                            <i class="fas fa-angle-left"></i>
                        </Link>
                        <p class="h2 text-gray-900 form-title">
                            EDIT PARENT
                        </p>
                    </div>

                    <!-- Form Proper -->
                    <form class="user p-5">
                        <!-- Name Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-lg-6">
                                <label class="ml-2">First Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="parentFirstName"
                                    value="Juan"
                                />
                            </div>
                            <div class="col-lg-6">
                                <label class="ml-2">Last Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="parentLastName"
                                    value="Dela Cruz"
                                />
                            </div>
                        </div>
                        <!-- Contact Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-lg-6">
                                <label class="ml-2">Contact No.</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="parentContactNo"
                                    value="09123456789"
                                />
                            </div>
                            <div class="col-lg-6">
                                <label class="ml-2">Email</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="parentEmail"
                                    value="email@email.com"
                                />
                            </div>
                        </div>
                        <!-- Parent Field -->
                        <div class="form-group row mb-5">
                            <div class="col-lg-12">
                                <label class="ml-2">Address</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="parentAddress"
                                    value="Calamba, Laguna"
                                />
                            </div>
                        </div>
                        <!-- Create Button -->
                        <div class="form-group">
                            <Link
                                href="#"
                                class="btn btn-primary btn-user btn-block"
                            >
                                Update
                            </Link>
                        </div>
                    </form>
                </div>
            </div>
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
    methods: {},
};
</script>

<style scoped>
@import "../../../public/crm-site/assets/css/sb-admin-2.css";

.form-container {
    width: 100%;
}

.form-title-container {
    display: flex;
    margin: 0px 0px 40px 0px;
}

.form-title {
    margin: 0px 0px 0px 20px;
}

.custom-select {
    font-size: 0.8rem;
    border-radius: 10rem;
    height: 50px;
    color: #858796;
    opacity: 1;
}

#back-btn {
    color: white;
    background-color: #282525;

} #back-btn:hover {
    color: #fff;
    background-color: #282525;
    border-color: #282525;
} #back-btn:focus {
    color: #fff;
    background-color: #282525;
    border-color: #282525;
    box-shadow: 0 0 0 0.1rem #9e9898;
}
</style>
