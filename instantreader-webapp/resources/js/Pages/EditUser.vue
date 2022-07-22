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
                            <div class="col-lg-6">
                                <label class="ml-2">First Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="userFirstName"
                                    value="Juan"
                                />
                            </div>
                            <div class="col-lg-6">
                                <label class="ml-2">Last Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="userLastName"
                                    value="Dela Cruz"
                                />
                            </div>
                        </div>
                        <!-- Nickname and Position Field -->
                        <div class="form-group row mb-4">
                            <div class="col-lg-6">
                                <label class="ml-2">Nickname</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="userNickname"
                                    value="Ju"
                                />
                            </div>
                            <div class="col-lg-6">
                                <label class="ml-2">Position</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="userPosition"
                                    value="Manager"
                                />
                            </div>
                        </div>
                        <!-- Contacts Field -->
                        <div class="form-group row mb-4">
                            <div class="col-lg-6">
                                <label class="ml-2">Contact No.</label>
                                <input
                                    type="tel"
                                    class="form-control form-control-user"
                                    id="userContactNo"
                                    value="09123456789"
                                />
                            </div>
                            <div class="col-lg-6">
                                <label class="ml-2">Email</label>
                                <input
                                    type="email"
                                    class="form-control form-control-user"
                                    id="userEmail"
                                    value="email@email.com"
                                />
                            </div>
                        </div>
                        <!-- Profile Picture -->
                        <div class="form-group mb-4 row">
                            <label for="userProfilePicture" class="col-lg-2 col-form-label ml-2">Profile Picture</label>
                            <div class="col-lg-3 custom-file" id="userProfilePicture">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <!-- Admin Checkbox -->
                        <div class="form-check ml-2 mb-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheck">
                            <label class="form-check-label ml-2" for="flexCheck">
                                Admin
                            </label>
                        </div>
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
