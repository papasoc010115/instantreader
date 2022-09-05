<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="pt-5 pb-5">
                <!-- Header with Search Bar -->
                <div class="d-flex">
                    <div class="ml-3">
                        <p class="h2 text-gray-900 mb-4 font-weight-bold">TUTORS LOUNGE</p>
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

                <!-- Column Headers -->
                <div class="column-header mt-5">
                    <div class="row text-center">
                        <div class="col-md-1">
                            <img hidden class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                        </div>
                        <div class="col font-weight-bold">First Name</div>
                        <div class="col font-weight-bold">Last Name</div>
                        <div class="col font-weight-bold">Branch</div>
                        <div class="col font-weight-bold">No. of Classes</div>
                        <div class="col-md-1 font-weight-bold">Status</div>
                    </div> 
                </div>
                

                <!-- Main Cards -->
                <div 
                    v-for="tutorIndex in 2" 
                    :key="tutorIndex" 
                    class="card shadow mb-4"
                >
                    <div class="card-header py-3">
                        <div class="row text-center d-flex align-items-center">
                            <div class="col-md-1">
                                <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                            </div>
                            <div class="col">Sage Ann</div>
                            <div class="col">Wong</div>
                            <div class="col">Los Baños</div>
                            <div class="col">3</div>
                            <div class="col-md-1">
                                <i  class="check-mark fas fa-lg fa-check"></i>
                            </div>
                        </div> 
                    </div>
                    <div class="card-body mx-4">
                        <!-- Tutor's Schedule -->
                        <div class="table-responsive">
                            <table
                                class="table table-hover text-center"
                                id="tutorsScheduleTable"
                                width="100%"
                                cellspacing="0"
                            >
                                <thead>
                                    <tr class="text-gray-900">
                                        <th>Time</th>
                                        <th>Dates</th>
                                        <th>Days</th>
                                        <th>Available Slots</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-900">
                                    <tr>
                                        <td>8 am - 9 am</td>
                                        <td>Jul 4 - Aug 26</td>
                                        <td>MWF</td>
                                        <td>0</td>
                                        <td>
                                            <i  class="x-mark fas fa-lg fa-times"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9 am - 10 am</td>
                                        <td>Jul 4 - Aug 26</td>
                                        <td>TTh</td>
                                        <td>10</td>
                                        <td>
                                            <i  class="check-mark fas fa-lg fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10 am - 11 am</td>
                                        <td>Jul 4 - Aug 26</td>
                                        <td>MWF</td>
                                        <td>0</td>
                                        <td>
                                            <i  class="x-mark fas fa-lg fa-times"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="d-flex pt-3">
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
    methods: {},
};
</script>

<style scoped>
@import "../../../public/crm-site/assets/css/sb-admin-2.css";

tbody {
    background-color: #D9D9D9;
}

.table {
    border-collapse: separate;
    border-spacing:0 10px
}

tr {
    line-height: 25px;
    min-height: 25px;
    height: 25px;
}

.check-mark {
    color: #29CB4D;
}

.x-mark {
    color: #FF6363;
}

.profile-pic{
    text-align: center;
    height: 100px;
    width: 100px;
    object-fit: cover;
    border-radius: 50%;
    background-color: rgb(87, 87, 87);
}

.column-header {
    padding: 0.75rem 1.25rem;
}

.input-group-append, .page-item {
    z-index: 1;
}
</style>
