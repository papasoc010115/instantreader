<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="py-5">
                <!-- Header with Search Bar -->
                <div class="d-flex">
                    <div>
                        <p class="h2 text-gray-900 mb-4 font-weight-bold">CLIENT INTERACTION TRACKING</p>
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
                <div class="d-flex px-3">
                    <!-- CLIENTS COLUMN -->
                    <div class="w-25 content-column px-3">
                        <!-- Enrollees -->
                        <div class="section-header pt-5">
                            <p class="h3 text-gray-900">Enrollees</p>
                        </div>
                        <div class="enrollees-container border border-dark overflow-auto">
                            <div>
                                <ul class="list-unstyled">
                                    <li 
                                        v-for="enrolleesIndex in 10" 
                                        :key="enrolleesIndex" 
                                        class="py-3 px-3"
                                    >
                                        <div class="d-flex align-items-center">
                                            <div class="img-container">
                                                <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                                <img v-if="enrolleesIndex%2==0" class="online-indicator" src="./../../../public/crm-site/assets/img/green-circle.png" />
                                            </div>
                                            <div class="ml-3">First Name Last Name</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Franchisees -->
                        <div class="section-header pt-5">
                            <p class="h3 text-gray-900">Franchisees</p>
                        </div>
                        <div class="franchisees-container border border-dark overflow-auto">
                            <div>
                                <ul class="list-unstyled">
                                    <li 
                                        v-for="franchiseesIndex in 10" 
                                        :key="franchiseesIndex" 
                                        class="py-3 px-3"
                                    >
                                        <div class="d-flex align-items-center">
                                            <div class="img-container">
                                                <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                                <img v-if="franchiseesIndex%2==0" class="online-indicator" src="./../../../public/crm-site/assets/img/green-circle.png" />
                                            </div>
                                            <div class="ml-3">First Name Last Name</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- MESSAGES COLUMN -->
                    <div class="w-50 content-column px-3">
                        <!-- Messages -->
                        <div class="section-header pt-5">
                            <p class="h3 text-gray-900">Messages</p>
                        </div>
                        <div class="message-container border border-dark p-3">
                            <div class="message-area overflow-auto">
                                <div class="received d-flex align-items-end p-3">
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" /> 
                                    <div class="message-content d-block ml-3 p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p class="m-0 timestamp text-end">
                                            09:24 - July 02, 2022
                                        </p>
                                    </div>        
                                </div>
                                <div class="sent d-flex align-items-end p-3"> 
                                    <div class="message-content d-block mr-3 p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p class="m-0 timestamp">
                                            09:24 - July 02, 2022
                                        </p>
                                    </div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />        
                                </div>
                                <div class="sent d-flex align-items-end p-3"> 
                                    <div class="message-content d-block mr-3 p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p class="m-0 timestamp">
                                            09:24 - July 02, 2022
                                        </p>
                                    </div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />        
                                </div>
                                <div class="received d-flex align-items-end p-3">
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" /> 
                                    <div class="message-content d-block ml-3 p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p class="m-0 timestamp text-end">
                                            09:24 - July 02, 2022
                                        </p>
                                    </div>        
                                </div>
                                <div class="received d-flex align-items-end p-3">
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" /> 
                                    <div class="message-content d-block ml-3 p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet.
                                        </p>
                                        <p class="m-0 timestamp text-end">
                                            09:24 - July 02, 2022
                                        </p>
                                    </div>        
                                </div>
                                <div class="received d-flex align-items-end p-3">
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" /> 
                                    <div class="message-content d-block ml-3 p-3">
                                        <p>
                                            Lorem ipsum.
                                        </p>
                                        <p class="m-0 timestamp text-end">
                                            09:24 - July 02, 2022
                                        </p>
                                    </div>        
                                </div>
                                <div class="sent d-flex align-items-end p-3"> 
                                    <div class="message-content d-block mr-3 p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p class="m-0 timestamp">
                                            09:24 - July 02, 2022
                                        </p>
                                    </div>
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />        
                                </div>
                                <div class="received d-flex align-items-end p-3">
                                    <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" /> 
                                    <div class="message-content d-block ml-3 p-3">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p class="m-0 timestamp text-end">
                                            09:24 - July 02, 2022
                                        </p>
                                    </div>        
                                </div>
                            </div>
                            <div class="input-area d-flex align-items-center py-3">
                                <textarea class="form-control" id="messageTextArea" placeholder="Type your message here..."></textarea>
                                <i class="px-3 fas fa-2x fa-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                    <!-- INTERACTIONS COLUMN -->
                    <div class="w-25 content-column px-3">
                        <!-- Checklist -->
                        <div class="section-header pt-5">
                             <p class="h3 text-gray-900">Checklist</p>
                        </div>
                        <div class="checklist-container border border-dark overflow-auto">
                            <div class="classes-section p-3">
                                <h4>CLASSES</h4>
                                <div class="d-flex align-items-center h5">
                                    <span class="ml-5">Basic</span>
                                    <i class="ml-auto mr-5 fas fa-check"></i>
                                </div>
                                <div class="d-flex align-items-center h5">
                                    <span class="ml-5">Advanced</span>
                                    <i class="ml-auto mr-5 fas fa-check"></i>
                                </div>
                                <div class="d-flex align-items-center h5">
                                    <span class="ml-5">Mastery</span>
                                    <i class="ml-auto mr-5 fas fa-times"></i>
                                </div>
                                <div class="d-flex align-items-center h5">
                                    <span class="ml-5">Compass</span>
                                    <i class="ml-auto mr-5 fas fa-times"></i>
                                </div>
                            </div>
                            <div class="classes-section p-3">
                                <h4>ADDITIONAL</h4>
                                <div class="d-flex align-items-center h5">
                                    <span class="ml-5">IR Kids Club</span>
                                    <i class="ml-auto mr-5 fas fa-check"></i>
                                </div>
                                <div class="d-flex align-items-center h5">
                                    <span class="ml-5">E-books</span>
                                    <i class="ml-auto mr-5 fas fa-times"></i>
                                </div>
                                <div class="d-flex align-items-center h5">
                                    <span class="ml-5">PDFs</span>
                                    <i class="ml-auto mr-5 fas fa-times"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Price Breakdown -->
                        <div class="section-header pt-5">
                            <p class="h3 text-gray-900">Price Breakdown</p>
                        </div>
                        <div class="price-breakdown-container border border-dark overflow-auto">
                            <div class="px-3 py-4">
                                <div class="d-flex">
                                    <p class="h4">Item</p>
                                    <p class="h4 ml-auto">Price</p>
                                </div>
                                <hr>
                                <div class="d-flex px-3">
                                    <p class="h5">Basic</p>
                                    <p class="h5 ml-auto">100.00</p>
                                </div>
                                <div class="d-flex px-3">
                                    <p class="h5">Advanced</p>
                                    <p class="h5 ml-auto">100.00</p>
                                </div>
                                <div class="d-flex px-3">
                                    <p class="h5">IR Kids Club</p>
                                    <p class="h5 ml-auto">100.00</p>
                                </div>
                                <hr>
                                <div class="d-flex px-3">
                                    <p class="h5">TOTAL</p>
                                    <p class="h5 ml-auto">300.00</p>
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
    methods: {},
};
</script>

<style scoped>
@import "../../../public/crm-site/assets/css/sb-admin-2.css";

.profile-pic{
    text-align: center;
    height: 50px;
    width: 50px;
    object-fit: cover;
    border-radius: 50%;
    background-color: rgb(87, 87, 87);
    position: relative;
}

.online-indicator {
    height: 15px;
    width: 15px;
    object-fit: cover;
    border-radius: 50%;
    position: absolute;
    top: 35px;
    left: 35px;
}

.img-container {
    position: relative;
}

.section-header {
    height: 10%;
    max-height: 10%; 
}

.enrollees-container {
    height: 40%;
    max-height: 40%;
}

.franchisees-container {
    height: 40%;
    max-height: 40%;
}

li:hover {
    background-color: #d9d9d9;
    cursor: pointer;
}

.message-container {
    height: 90%;
    max-height: 90%;
}

.message-area {
    height: 90%;
    max-height: 90%;
}

.input-area {
    height: 10%;
    max-height: 10%;
}

.checklist-container {
    height: 40%;
    max-height: 40%;
}

.price-breakdown-container{
    height: 40%;
    max-height: 40%;
}

.fa-times {
    color: #FF6363;
}

.fa-check {
    color: #29CB4D;
}

.content-column {
    min-height: 100vh;
    max-height: 150vh;
}

hr {
    border: none;
    height: 1px;
    opacity: 1;
    color: #000000;
    background-color: #000000;
}

.timestamp {
    font-size: 12px;
}

.received .message-content {
    background-color: #d9d9d9;
    border-radius: 15px;
}

.sent .message-content {
    background-color: #5A88FF;
    border-radius: 15px;
}

#messageTextArea {
    resize: none;
    height: 100%;
}

.fa-paper-plane {
    color: #4e73df;
}

.fa-paper-plane:hover {
    cursor: pointer;
    color: #224abe;
}

.input-group-append, .page-item {
    z-index: 1;
}
</style>
