<!-- Template by: ecdcabalda -->
<!-- Used by: sclee -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="p-5 form-container">
                    <!-- Header with Back Button -->
                    <div class="form-title-container">
                        <Link href="/crm/admin/manage-users" class="btn btn-circle" id="back-btn">
                            <i class="fas fa-angle-left"></i>
                        </Link>
                        <p class="h2 text-gray-900 form-title">EDIT USER</p>
                    </div>

                    <!-- Form Proper -->
                    <form class="user p-5">
                        <!-- Name Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-sm-6">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="exampleFirstName"
                                    value="Skye Kaye"
                                />
                            </div>
                            <div class="col-sm-6">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="exampleLastName"
                                    value="Ramos"
                                />
                            </div>
                        </div>
                        <!-- Email Field -->
                        <div class="form-group mb-3">
                            <input
                                type="email"
                                class="form-control form-control-user"
                                id="exampleInputEmail"
                                value="email@email.com"
                            />
                        </div>
                        <!-- Position Field -->
                        <div class="form-group mb-3">
                            <input
                                type="text"
                                class="form-control form-control-user"
                                id="exampleInputPosition"
                                value="Back-end Developer"
                            />
                        </div>
                        <!-- Admin Checkbox -->
                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="flexCheckChecked"
                                />
                                <label
                                    class="form-check-label"
                                    for="flexCheckChecked"
                                >
                                    Is Admin
                                </label>
                            </div>
                        </div>
                        <!-- Profile Picture -->
                        <div class="form-group mb-3">
                            <label for="exampleInputFile" class=""
                                >Profile Picture</label
                            >
                            <input
                                type="file"
                                class="file-upload"
                                id="exampleInputFile"
                                placeholder="Profile Picture"
                            />
                        </div>
                        <div class="form-group">
                            <Link
                                href="#"
                                class="btn btn-primary btn-user btn-block"
                            >
                                Create
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
    data() {},
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

.file-upload {
    margin: 0px 0px 0px 20px;
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
