<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="p-5 form-container">
                    <!-- Header with Back Button -->
                    <div class="form-title-container">
                        <Link href="/crm/sales/contact-management" class="btn btn-primary btn-circle">
                            <i class="fas fa-angle-left"></i>
                        </Link>
                        <p class="h2 text-gray-900 form-title">
                            EDIT LEAD
                        </p>
                    </div>

                    <!-- Form Proper -->
                    <form class="user p-5">
                        <!-- Name Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-sm-6">
                                <label class="ml-2">First Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="leadFirstName"
                                    value="Juan"
                                />
                            </div>
                            <div class="col-sm-6">
                                <label class="ml-2">Last Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="leadLastName"
                                    value="Dela Cruz"
                                />
                            </div>
                        </div>
                        <!-- Email Field -->
                        <div class="form-group mb-3">
                            <label class="ml-2">Email</label>
                            <input
                                type="email"
                                class="form-control form-control-user"
                                id="leadEmail"
                                value="email@email.com"
                            />
                        </div>
                        <!-- Contact No. Field -->
                        <div class="form-group mb-3">
                            <label class="ml-2">Contact No.</label>
                            <input
                                type="tel"
                                class="form-control form-control-user"
                                id="leadContactNo"
                                value="09123456789"
                            />
                        </div>
                        <!-- Assigned Users Field -->
                        <div class="mb-3">
                            <label class="ml-2">Assigned Users</label>
                            <div class="d-flex border assigned-users rounded-pill">
                                <div class="d-flex users-container" id="leadAssignedUsers">
                                    <div class="chip m-2">
                                        Jenel Juju
                                        <Link><i class="ml-2 fas fa-times"></i></Link>
                                    </div>
                                    <div class="chip m-2">
                                        Sage Wong
                                        <Link><i class="ml-2 fas fa-times"></i></Link>
                                    </div>
                                    <div class="chip m-2">
                                        Yoru Kageyama
                                        <Link><i class="ml-2 fas fa-times"></i></Link>
                                    </div>
                                    <div class="chip m-2">
                                        Jenel Juju
                                        <Link><i class="ml-2 fas fa-times"></i></Link>
                                    </div>
                                    <div class="chip m-2">
                                        Sage Wong
                                        <Link><i class="ml-2 fas fa-times"></i></Link>
                                    </div>
                                    <div class="chip m-2">
                                        Yoru Kageyama
                                        <Link><i class="ml-2 fas fa-times"></i></Link>
                                    </div>
                                </div>
                                <div class="add-container border-start d-flex align-items-center justify-content-center">
                                    <Link><i class="fas fa-2x fa-plus"></i></Link>
                                </div>
                            </div>
                        </div>
                        <!-- Create Button -->
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

.test {
    background-color: red;
}

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

.btn-circle {
    color: white;
    background-color: #282525;
    border-color: #282525;

} 

.btn-circle:hover {
    color: #fff;
    background-color: #282525;
    border-color: #282525;
}

.btn-circle:focus {
    color: #fff;
    background-color: #282525;
    border-color: #282525;
    box-shadow: 0 0 0 0.1rem #9e9898;
}

</style>
