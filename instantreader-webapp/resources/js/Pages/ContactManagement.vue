<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="pt-5 pb-5">          
                <!-- Header with Search Bar -->
                <div class="d-flex">
                    <div>
                        <p class="h2 text-gray-900 mb-4 font-weight-bold">CONTACT MANAGEMENT</p>
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

                <!-- Main Content -->
                <div class="my-5 d-flex">
                    <!-- List of Prospects Section -->
                    <div class="mx-4 w-50"> 
                        <p class="h3 text-gray-900 mb-4">List of Prospects</p>
                        <div class="border border-dark">
                            <!-- Button to Add Prospect -->
                            <div class="m-3">
                                <Link href="/crm/sales/contact-management/create-prospect" class="btn btn-primary btn-block">Add Prospect</Link>
                            </div>
                            <!-- Actual List of Prospects -->
                            <div>
                                <div class="card shadow m-3">
                                    <div class="card-header py-3 d-flex">
                                        <div class="h6 m-0 font-weight-bold contact-name">First Name Last Name</div>
                                        <div class="ml-auto">
                                            <Link href="/crm/sales/contact-management/edit-prospect"
                                                ><i class="fas fa-pen mr-3"></i
                                            ></Link>
                                            <Link href="#"
                                                ><i class="fas fa-trash ml-3"></i
                                            ></Link>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Contact Number Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Contact Number
                                            </div>
                                            <div class="w-50 text-center">
                                                09123456789
                                            </div>
                                        </div>
                                        <!-- Email Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Email
                                            </div>
                                            <div class="w-50 text-center">
                                                email@email.com
                                            </div>
                                        </div>
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Assigned Users
                                                <Link><i class="fas fa-plus ml-3"></i></Link>
                                            </div>
                                            <div class="w-50 text-center">
                                                <ul class="list-unstyled">
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card shadow m-3">
                                    <div class="card-header py-3 d-flex">
                                        <div class="h6 m-0 font-weight-bold contact-name">First Name Last Name</div>
                                        <div class="ml-auto">
                                            <Link href="/crm/sales/contact-management/edit-prospect"
                                                ><i class="fas fa-pen mr-3"></i
                                            ></Link>
                                            <Link href="#"
                                                ><i class="fas fa-trash ml-3"></i
                                            ></Link>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Contact Number Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Contact Number
                                            </div>
                                            <div class="w-50 text-center">
                                                09123456789
                                            </div>
                                        </div>
                                        <!-- Email Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Email
                                            </div>
                                            <div class="w-50 text-center">
                                                email@email.com
                                            </div>
                                        </div>
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Assigned Users
                                                <Link><i class="fas fa-plus ml-3"></i></Link>
                                            </div>
                                            <div class="w-50 text-center">
                                                <ul class="list-unstyled">
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card shadow m-3">
                                    <div class="card-header py-3 d-flex">
                                        <div class="h6 m-0 font-weight-bold contact-name">First Name Last Name</div>
                                        <div class="ml-auto">
                                            <Link href="/crm/sales/contact-management/edit-prospect"
                                                ><i class="fas fa-pen mr-3"></i
                                            ></Link>
                                            <Link href="#"
                                                ><i class="fas fa-trash ml-3"></i
                                            ></Link>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Contact Number Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Contact Number
                                            </div>
                                            <div class="w-50 text-center">
                                                09123456789
                                            </div>
                                        </div>
                                        <!-- Email Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Email
                                            </div>
                                            <div class="w-50 text-center">
                                                email@email.com
                                            </div>
                                        </div>
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Assigned Users
                                                <Link><i class="fas fa-plus ml-3"></i></Link>
                                            </div>
                                            <div class="w-50 text-center">
                                                <ul class="list-unstyled">
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <nav class="text-center">
                                <ul class="pagination justify-content-center">
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

                    <!-- Potential Leads -->
                    <div class="mx-4 w-50"> 
                        <p class="h3 text-gray-900 mb-4">Potential Leads</p>
                        <div class="border border-dark">
                            <!-- Button to Add Prospect -->
                            <div class="m-3">
                                <Link href="/crm/sales/contact-management/create-lead" class="btn btn-primary btn-block">Add Lead</Link>
                            </div>
                            <!-- Actual List of Prospects -->
                            <div>
                                <div class="card shadow m-3">
                                    <div class="card-header py-3 d-flex">
                                        <div class="h6 m-0 font-weight-bold contact-name">First Name Last Name</div>
                                        <div class="ml-auto">
                                            <Link href="/crm/sales/contact-management/edit-lead"
                                                ><i class="fas fa-pen mr-3"></i
                                            ></Link>
                                            <Link href="#"
                                                ><i class="fas fa-trash ml-3"></i
                                            ></Link>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Contact Number Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Contact Number
                                            </div>
                                            <div class="w-50 text-center">
                                                09123456789
                                            </div>
                                        </div>
                                        <!-- Email Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Email
                                            </div>
                                            <div class="w-50 text-center">
                                                email@email.com
                                            </div>
                                        </div>
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Assigned Users
                                                <Link><i class="fas fa-plus ml-3"></i></Link>
                                            </div>
                                            <div class="w-50 text-center">
                                                <ul class="list-unstyled">
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card shadow m-3">
                                    <div class="card-header py-3 d-flex">
                                        <div class="h6 m-0 font-weight-bold contact-name">First Name Last Name</div>
                                        <div class="ml-auto">
                                            <Link href="/crm/sales/contact-management/edit-lead"
                                                ><i class="fas fa-pen mr-3"></i
                                            ></Link>
                                            <Link href="#"
                                                ><i class="fas fa-trash ml-3"></i
                                            ></Link>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Contact Number Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Contact Number
                                            </div>
                                            <div class="w-50 text-center">
                                                09123456789
                                            </div>
                                        </div>
                                        <!-- Email Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Email
                                            </div>
                                            <div class="w-50 text-center">
                                                email@email.com
                                            </div>
                                        </div>
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Assigned Users
                                                <Link><i class="fas fa-plus ml-3"></i></Link>
                                            </div>
                                            <div class="w-50 text-center">
                                                <ul class="list-unstyled">
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card shadow m-3">
                                    <div class="card-header py-3 d-flex">
                                        <div class="h6 m-0 font-weight-bold contact-name">First Name Last Name</div>
                                        <div class="ml-auto">
                                            <Link href="/crm/sales/contact-management/edit-lead"
                                                ><i class="fas fa-pen mr-3"></i
                                            ></Link>
                                            <Link href="#"
                                                ><i class="fas fa-trash ml-3"></i
                                            ></Link>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Contact Number Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Contact Number
                                            </div>
                                            <div class="w-50 text-center">
                                                09123456789
                                            </div>
                                        </div>
                                        <!-- Email Row -->
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Email
                                            </div>
                                            <div class="w-50 text-center">
                                                email@email.com
                                            </div>
                                        </div>
                                        <div class="d-flex my-3">
                                            <div class="w-50">
                                                Assigned Users
                                                <Link><i class="fas fa-plus ml-3"></i></Link>
                                            </div>
                                            <div class="w-50 text-center">
                                                <ul class="list-unstyled">
                                                    <li>FirstName LastName</li>
                                                    <li>FirstName LastName</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <nav class="text-center">
                                <ul class="pagination justify-content-center">
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

.contact-name {
    color: #000;
}

.fa-pen {
    color: #757474;
}

.fa-pen:hover {
    color: #000;
}

.fa-trash {
    color: #757474;
}

.fa-trash:hover {
    color: #000;
}

.fa-plus {
    color: #757474;
}

.fa-plus:hover {
    color: #000;
}
</style>
