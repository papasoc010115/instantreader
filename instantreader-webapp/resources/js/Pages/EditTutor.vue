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
                        <Link href="/crm/admin/manage-tutors" class="btn btn-circle" id="back-btn">
                            <i class="fas fa-angle-left"></i>
                        </Link>
                        <p class="h2 text-gray-900 form-title">EDIT TUTOR</p>
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
                                    id="tutorFirstName"
                                    value="Sage Ann"
                                />
                            </div>
                            <div class="col-lg-6">
                                <label class="ml-2">Last Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="tutorLastName"
                                    value="Wong"
                                />
                            </div>
                        </div>
                        <!-- Contacts Field -->
                        <div class="form-group row mb-4">
                            <div class="col-lg-6">
                                <label class="ml-2">Contact No.</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="tutorContactNo"
                                    value="09123456789"
                                />
                            </div>
                            <div class="col-lg-6">
                                <label class="ml-2">Email</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="tutorEmail"
                                    value="email@email.com"
                                />
                            </div>
                        </div>
                        <!-- Branch Field -->
                        <div class="form-group mb-4 row">
                            <label for="tutorBranch" class="col-lg-3 col-form-label ml-2">Branch</label>
                            <div class="col-lg-4">
                                <select class="custom-select">
                                    <label class="mr-3">Branch</label>
                                    <option value="Cabuyao" selected>Cabuyao</option>
                                    <option value="Calamba">Calamba</option>
                                    <option value="Los Banos">Los Banos</option>
                                    <option value="Sta. Rosa">Sta/ Rosa</option>
                                </select>
                            </div>
                        </div>
                        <!-- Max Students Field -->
                        <div class="form-group mb-4 row">
                            <label for="tutorMaxStudents" class="col-lg-3 col-form-label ml-2">Maximum Number of Students</label>
                            <div class="col-lg-1">
                                <input
                                type="email"
                                class="form-control form-control-user"
                                id="tutorMaxStudents"
                                value="10"
                                />
                            </div>
                        </div>
                        <!-- Profile Picture -->
                        <div class="form-group mb-5 row">
                            <label for="tutorProfilePicture" class="col-lg-3 col-form-label ml-2">Profile Picture</label>
                            <div class="col-lg-3 custom-file">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
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

input, label {
    display: block;
}

#tutorMaxStudents {
    text-align: center;
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
