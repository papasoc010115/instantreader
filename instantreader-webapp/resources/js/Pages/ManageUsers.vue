<!-- Template by: ecdcabalda -->
<!-- Used by: sclee -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="pt-5 pb-5">
                <!-- Header and Search Bar -->
                <div class="d-flex">
                    <div>
                        <p class="h2 text-gray-900 mb-4 font-weight-bold">MANAGE USERS</p>
                    </div>
                    <div class="ml-auto">
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        >
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control bg-light border-0 small"
                                    placeholder="Search for..."
                                    aria-label="Search"
                                    aria-describedby="basic-addon2"
                                />
                                <div class="input-group-append">
                                    <button
                                        class="btn btn-primary"
                                        type="button"
                                    >
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Main Table -->
                <div class="table-responsive mt-5">
                    <table
                        class="table table-striped table-hover text-center"
                        id="manageUsersTable"
                        width="100%"
                        cellspacing="0"
                    >
                        <thead>
                            <tr class="text-gray-900">
                                <th>User</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Position</th>
                                <th>Last Activity</th>
                                <th>Admin</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-900" style="vertical-align: middle">
                            <tr v-for="index in 6" :key="index">
                                <td class="text-left" height=100 width=250>
                                    <span class="ml-4">
                                        <img src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" height=100 width=100>
                                    </span>
                                    <span> Skye </span>
                                </td>
                                <td class="align-middle">Skye Kaye</td>
                                <td class="align-middle">Ramos</td>
                                <td class="align-middle">Full Stack Developer</td>
                                <td class="align-middle">Create UI Design</td>
                                <td v-if="index%2==0" class="align-middle"><i class="fas fa-check fa-lg" id="check-icon"></i></td>
                                <td v-else class="align-middle"><i class="fas fa-times fa-lg" id="x-icon"></i></td>
                                <td class="align-middle">
                                    <Link href="/crm/admin/manage-users/edit-user"
                                        ><i class="fas fa-pen mr-3" id="edit-icon"></i
                                    ></Link>
                                    <Link href="#"
                                        ><i class="fas fa-trash ml-3" id="trash-icon"></i
                                    ></Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Add User & Pagination -->
                <div class="d-flex pt-3">
                    <div>
                        <Link href="/crm/admin/manage-users/create-user" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Add User</span>
                        </Link>
                    </div>
                    <div class="ml-auto">
                        <nav class="text-center">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <Link
                                        class="page-link"
                                        href="#"
                                        aria-label="Previous"
                                    >
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </Link>
                                </li>
                                <li class="page-item active">
                                    <Link class="page-link" href="#">1</Link>
                                </li>
                                <li class="page-item">
                                    <Link class="page-link" href="#">2</Link>
                                </li>
                                <li class="page-item">
                                    <Link class="page-link" href="#">3</Link>
                                </li>
                                <li class="page-item">
                                    <Link
                                        class="page-link"
                                        href="#"
                                        aria-label="Next"
                                    >
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </Link>
                                </li>
                            </ul>
                        </nav>
                    </div>
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
tr {
    line-height: 50px;
    min-height: 50px;
    height: 50px;
} 

img {
    border-radius: 50%;
    margin-right: 5%;
} 

#check-icon {
    color: #29CB4D;
} 
#x-icon {
    color: #FF6363;
} 

#trash-icon, #edit-icon {
    color: #757474;
} 
#trash-icon:hover, #edit-icon:hover {
    color: #000;
}
</style>
