<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <DeleteParent :show="toggleParent" @close="handleCloseModal" />
        <div class="container-fluid">
            <div class="pt-5 pb-5">
                <!-- Header with Back Button-->
                <div class="d-flex">
                    <Link href="/crm/admin/manage-classrooms/students" class="btn btn-circle" id="back-btn">
                        <i class="fas fa-angle-left"></i>
                    </Link>
                    <div class="ml-3">
                        <p class="h2 text-gray-900 mb-4 font-weight-bold">PARENT</p>
                    </div>
                </div>

                <!-- Main Table -->
                <div class="table-responsive mt-5">
                    <table
                        class="table table-striped table-hover text-center"
                        id="parentTable"
                        width="100%"
                        cellspacing="0"
                    >
                        <thead>
                            <tr class="text-gray-900">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-900">
                            <tr>
                                <td class="align-middle">Jenel</td>
                                <td class="align-middle">Juju</td>
                                <td class="align-middle">09123456789</td>
                                <td class="align-middle">juju@gmail.com</td>
                                <td class="align-middle">Calamba, Laguna</td>
                                <td class="align-middle">
                                    <Link href="/crm/admin/manage-classrooms/students/parent/edit-parent"
                                        ><i class="fas fa-pen mr-3" id="edit-icon"></i
                                    ></Link>
                                    <i @click="handleDelParent" class="fas fa-trash ml-3" id="trash-icon"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import AppLayout from "../Layouts/AppLayout.vue";
import DeleteParent from "../Components/modals/DeleteParentModal.vue"

export default {
    components: {
        Link,
        AppLayout,
        DeleteParent,
    },
    data() {
        return {
            toggleParent: false,
        };
    },
    methods: {
        handleDelParent() {
            this.toggleParent = !this.toggleParent;
        },
        handleCloseModal() {
            this.toggleParent = false;
        },
    },
};
</script>

<style scoped>
@import "../../../public/crm-site/assets/css/sb-admin-2.css";

tr {
    line-height: 50px;
    min-height: 50px;
    height: 50px;
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
} #trash-icon, #edit-icon {
    color: #757474;
} #trash-icon:hover, #edit-icon:hover {
    color: #000;
}
</style>
