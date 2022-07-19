<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="pt-5 pb-5">
                <!-- Header with Search Bar -->
                <div class="d-flex">
                    <div class="ml-3">
                        <p class="h2 text-gray-900 mb-4">MANAGE CLASSROOMS</p>
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
                            <tr>
                                <td>#012345</td>
                                <td>Calamba</td>
                                <td>Sage Wong</td>
                                <td>10</td>
                                <td>10</td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students">View List</Link>
                                </td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students/edit-student"
                                        ><i class="fas fa-pen mr-3" id="edit-icon"></i
                                    ></Link>
                                    <Link href="#"
                                        ><i class="fas fa-trash ml-3" id="trash-icon"></i
                                    ></Link>
                                </td>
                            </tr>
                            <tr>
                                <td>#21253</td>
                                <td>Los Baños</td>
                                <td>Reyna Santos</td>
                                <td>15</td>
                                <td>5</td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students">View List</Link>
                                </td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students/edit-student"
                                        ><i class="fas fa-pen mr-3" id="edit-icon"></i
                                    ></Link>
                                    <Link href="#"
                                        ><i class="fas fa-trash ml-3" id="trash-icon"></i
                                    ></Link>
                                </td>
                            </tr>
                            <tr>
                                <td>#02496</td>
                                <td>Cabuyao</td>
                                <td>Yoru Kageyama</td>
                                <td>17</td>
                                <td>3</td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students">View List</Link>
                                </td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students/edit-student"
                                        ><i class="fas fa-pen mr-3" id="edit-icon"></i
                                    ></Link>
                                    <Link href="#"
                                        ><i class="fas fa-trash ml-3" id="trash-icon"></i
                                    ></Link>
                                </td>
                            </tr>
                            <tr>
                                <td>#012345</td>
                                <td>Calamba</td>
                                <td>Sage Wong</td>
                                <td>10</td>
                                <td>10</td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students">View List</Link>
                                </td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students/edit-student"
                                        ><i class="fas fa-pen mr-3" id="edit-icon"></i
                                    ></Link>
                                    <Link href="#"
                                        ><i class="fas fa-trash ml-3" id="trash-icon"></i
                                    ></Link>
                                </td>
                            </tr>
                            <tr>
                                <td>#21253</td>
                                <td>Los Baños</td>
                                <td>Reyna Santos</td>
                                <td>15</td>
                                <td>5</td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students">View List</Link>
                                </td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students/edit-student"
                                        ><i class="fas fa-pen mr-3" id="edit-icon"></i
                                    ></Link>
                                    <Link href="#"
                                        ><i class="fas fa-trash ml-3" id="trash-icon"></i
                                    ></Link>
                                </td>
                            </tr>
                            <tr>
                                <td>#02496</td>
                                <td>Cabuyao</td>
                                <td>Yoru Kageyama</td>
                                <td>17</td>
                                <td>3</td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students">View List</Link>
                                </td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students/edit-student"
                                        ><i class="fas fa-pen mr-3" id="edit-icon"></i
                                    ></Link>
                                    <Link href="#"
                                        ><i class="fas fa-trash ml-3" id="trash-icon"></i
                                    ></Link>
                                </td>
                            </tr>
                            <tr>
                                <td>#012345</td>
                                <td>Calamba</td>
                                <td>Sage Wong</td>
                                <td>10</td>
                                <td>10</td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students">View List</Link>
                                </td>
                                <td>
                                    <Link href="/crm/admin/manage-classrooms/students/edit-student"
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
.h2 {
    font-weight: bold;
}
tr {
    line-height: 75px;
    min-height: 75px;
    height: 75px;
} #trash-icon {
    margin-left: 2rem;
    color: #757474;
} #trash-icon:hover {
    color: #000;
} #edit-icon {
    color: #757474;
} #edit-icon:hover {
    color: #000;
}
</style>
