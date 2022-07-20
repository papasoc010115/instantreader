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
                        <Link href="/crm/admin/manage-classrooms" class="btn btn-circle" id="back-btn">
                            <i class="fas fa-angle-left"></i>
                        </Link>
                        <p class="h2 text-gray-900 form-title">CREATE CLASSROOM</p>
                    </div>

                    <!-- Form Proper -->
                    <form class="user p-5">
                        <!-- Branch Field -->
                        <div class="form-group mb-4 row">
                            <label for="classroomBranch" class="col-lg-3 col-form-label ml-2">Branch</label>
                            <div class="col-lg-6">
                                <select class="custom-select" id="classroomBranch">
                                    <label class="mr-3">Branch</label>
                                    <option value="Cabuyao" selected>Cabuyao</option>
                                    <option value="Calamba">Calamba</option>
                                    <option value="Los Banos">Los Banos</option>
                                    <option value="Sta. Rosa">Sta/ Rosa</option>
                                </select>
                            </div>
                        </div>
                        <!-- Tutor Field -->
                        <div class="form-group mb-4 row">
                            <label for="classroomTutor" class="col-lg-3 col-form-label ml-2">Tutor</label>
                            <div class="col-lg-6">
                                <select class="custom-select" id="classroomTutor">
                                    <label class="mr-3">Select Tutor</label>
                                    <option value="SkyeRamos">Skye Ramos</option>
                                    <option value="SageWong">Sage Wong</option>
                                    <option value="YoruKageyama">Yoru Kageyama</option>
                                    <option value="ReynaSantos">Reyna Santos</option>
                                </select>
                            </div>
                        </div>
                        <!-- Max Students Field -->
                        <div class="form-group mb-4 row">
                            <label for="classroomMaxStudents" class="col-lg-3 col-form-label ml-2">Maximum Number of Students</label>
                            <div class="col-lg-1">
                                <input
                                type="number"
                                class="form-control form-control-user text-center"
                                id="classroomMaxStudents"
                                placeholder="e.g. 1"
                                />
                            </div>
                        </div>
                        <!-- List of Students Field -->
                        <div class="mb-4">
                            <label class="ml-2">Students</label>
                            <div class="d-flex border assigned-users rounded-pill">
                                <div class="d-flex users-container" id="prospectAssignedUsers">
                                    <!-- <div class="chip m-2" v-for="index in 6" :key="index">
                                        Jenel Juju
                                        <Link><i class="ml-2 fas fa-times"></i></Link>
                                    </div> -->
                                </div>
                                <div class="add-container border-start d-flex align-items-center justify-content-center">
                                    <Link><i class="fas fa-2x fa-plus"></i></Link>
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

.chip {
    padding: 0 25px;
    line-height: 40px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.users-container {
    width: 90%;
    flex-wrap: wrap;
}

.add-container {
    width: 10%
}

.fa-times {
    color: #757474;
}

.fa-times:hover{
    color: #000;
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
