<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <DeleteClassroom :show="toggleDelModal" @close="handleCloseModal" />
        <div class="container-fluid">
            <div class="pt-5 pb-5">
                <!-- Header with Search Bar -->
                <div class="d-flex">
                    <div>
                        <p class="h2 text-gray-900 mb-4 font-weight-bold">MANAGE CLASSROOMS</p>
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
                        id="manageClassroomsTable"
                        width="100%"
                        cellspacing="0"
                    >
                        <thead>
                            <tr class="text-gray-900">
                                <th>Code</th>
                                <th>Branch</th>
                                <th>Tutor</th>
                                <th>Booked Slots</th>
                                <th>Available Slots</th>
                                <th>Students</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-900">
                            <tr v-for="index in 7" :key="index">
                                <!-- Code -->
                                <td v-if="index%3==0">#02496</td>
                                <td v-else-if="index%2==0">#21253</td>
                                <td v-else>#012345</td>

                                <!-- Branch -->
                                <td v-if="index%3==0">Cabuyao</td>
                                <td v-else-if="index%2==0">Los Baños</td>
                                <td v-else>Calamba</td>

                                <!-- Tutor -->
                                <td v-if="index%3==0">Yoru Kageyama</td>
                                <td v-else-if="index%2==0">Reyna Santos</td>
                                <td v-else>Sage Wong</td>

                                <!-- Booked Slots -->
                                <td v-if="index%3==0">17</td>
                                <td v-else-if="index%2==0">15</td>
                                <td v-else>10</td>

                                <!-- Available Slots -->
                                <td v-if="index%3==0">3</td>
                                <td v-else-if="index%2==0">5</td>
                                <td v-else>10</td>

                                <!-- Student List -->
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students">View List</Link>
                                </td>

                                <!-- Actions -->
                                <td>
                                    <Link 
                                        href="/crm/admin/manage-classrooms/edit-classroom"
                                        ><i 
                                            class="fas fa-pen mr-3">
                                        </i
                                    ></Link>
                                    <i 
                                        @click="handleDelClick"
                                        class="fas fa-trash ml-3"
                                    ></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Add Class & Pagination -->
                <div class="d-flex pt-3">
                    <div>
                        <Link href="/crm/admin/manage-classrooms/create-classroom" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Add Classroom</span>
                        </Link>
                    </div>
                    <div class="ml-auto">
                        <nav class="text-center">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a
                                        class="page-link"
                                        href="#"
                                        aria-label="Previous"
                                    >
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a
                                        class="page-link"
                                        href="#"
                                        aria-label="Next"
                                    >
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
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
import DeleteClassroom from "../Components/modals/DeleteClassroomModal.vue"

export default {
    components: {
        Link,
        AppLayout,
        DeleteClassroom,
    },
    data () {
        return {
            toggleDelModal: false,
        };
    },
    methods: {
        handleDelClick () {
            this.toggleDelModal = !this.toggleDelModal;
        },
        handleCloseModal () {
            this.toggleDelModal = false;
        }
    },
};
</script>

<style scoped>
@import "../../../public/crm-site/assets/css/sb-admin-2.css";
tr {
    line-height: 75px;
    min-height: 75px;
    height: 75px;
}

.fa-pen {
    color: #757474;
}

.fa-trash {
    color: #757474;
}

.fa-pen:hover {
    color: #000;
}

.fa-trash:hover {
    color: #000;
    cursor: pointer;
}

.input-group-append, .page-item {
    z-index: 1;
}
</style>
