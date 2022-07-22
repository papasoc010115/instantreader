<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="pt-5 pb-5">          
                <!-- Header with Search Bar -->
                <div class="d-flex">
                    <div>
                        <p class="h2 text-gray-900 mb-4 font-weight-bold">LEAD MANAGEMENT</p>
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
                <div class="d-flex">
                    <!-- Customers List -->
                    <div class="w-25 mr-4 ">
                        <!-- Customer Column Header -->
                        <div>
                            <p class="h4 text-gray-900 my-3">Customers</p>
                        </div>
                        <!-- Customer List Box -->
                        <div class="border border-dark lead-container overflow-auto">
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer active d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                            <div class="customer d-flex p-3 align-items-center">
                                <div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                </div>
                                <div class="ml-3">First Name Last Name</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sales Funnel Details -->
                    <div class="w-75 ml-4 ">
                        <!-- Sales Funnel Column Header -->
                        <div>
                            <p class="h4 text-gray-900 my-3">Sales Funnel Stages</p>
                        </div>
                        <!-- Sales Funnel Details Box -->
                        <div class="border border-dark lead-container overflow-auto d-block py-5">
                            <!-- Awareness -->
                            <div class="sales-funnel-stage mx-5 mb-5">
                                <div class="sales-funnel-header d-flex">
                                    <p class="h5 w-25">Awareness</p>
                                    <i  class="check-mark mr-auto fas fa-lg fa-check w-75"></i>
                                </div>
                                <div class="sales-funnel-details ml-auto p-2">
                                    <p class="m-0">Became aware of the program through friend recommendations</p>
                                </div>
                            </div>
                            <!-- Interest -->
                            <div class="sales-funnel-stage mx-5 mb-5">
                                <div class="sales-funnel-header d-flex">
                                    <p class="h5 w-25">Interest</p>
                                    <i  class="check-mark mr-auto fas fa-lg fa-check w-75"></i>
                                </div>
                                <div class="sales-funnel-details ml-auto p-2">
                                    <p class="m-0">Followed the Instant Reader Facebook page</p>
                                </div>
                            </div>
                            <!-- Decision -->
                            <div class="sales-funnel-stage mx-5 mb-5">
                                <div class="sales-funnel-header d-flex">
                                    <p class="h5 w-25">Decision</p>
                                    <i  class="x-mark mr-auto fas fa-lg fa-times w-75"></i>
                                </div>
                                <div class="sales-funnel-details ml-auto p-2">
                                    <ul class="m-0 list-unstyled">
                                        Possible Actions:
                                        <li>
                                            Contact them directly
                                        </li>
                                        <li>
                                            Put more advertisements
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Action -->
                            <div class="sales-funnel-stage mx-5 mb-5">
                                <div class="sales-funnel-header d-flex">
                                    <p class="h5 w-25">Action</p>
                                    <i  class="x-mark mr-auto fas fa-lg fa-times w-75"></i>
                                </div>
                                <div class="sales-funnel-details ml-auto p-2">
                                    <ul class="m-0 list-unstyled">
                                        Possible Actions:
                                        <li>
                                            Inform client of an upcoming sale
                                        </li>
                                        <li>
                                            Show testimonials
                                        </li>
                                    </ul>
                                </div>
                            </div>
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

.sales-funnel-stage {
    min-width: 500px;
}

.sales-funnel-details {
    width: 95%;
    background-color: #D9D9D9;
}

.check-mark {
    color: #29CB4D;
}

.x-mark {
    color: #FF6363;
}

.profile-pic{
    text-align: center;
    height: 50px;
    width: 50px;
    object-fit: cover;
    border-radius: 50%;
    background-color: rgb(87, 87, 87);
}

.customer.active {
    color: #fff;
    background-color: #4e73df;
}

.customer.active:hover {
    color: #fff;
    background-color: #4e73df;
}

.customer:hover {
    background-color: #D9D9D9;
}

.lead-container {
    height: 75vh
}
</style>
