<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="pt-3 pb-5 d-flex">
                <!-- MAIN CONTENT -->
                <div class="main-content w-75 pr-5">
                    <!-- Announcements -->
                    <div class="section-header pt-3 pb-5">
                        <p class="h4 text-gray-900">Announcements</p>
                    </div>
                    <div class="announcement-container overflow-auto">
                        <div class="announcement-list p-3">
                            <div 
                                v-for="announcementIndex in 4" 
                                :key="announcementIndex" 
                                class="card shadow mb-4"
                            >
                                <div class="card-header py-3 d-flex align-items-center">
                                    <div class="img-container">
                                        <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                    </div>
                                    <div class="ml-3 font-weight-bold">First Name Last Name</div>
                                    <div class="ml-auto">17:05, July 04, 2022</div>
                                </div>
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sessions -->
                    <div class="section-header pt-5 pb-5">
                        <p class="h4 text-gray-900">Sessions</p>
                    </div>
                    <div class="sessions-container">
                        <div id="sessionsCarousel" class="carousel slide d-flex align-items-center h-100">
                            <div>
                                <i type="button" class="fas fa-3x fa-angle-left" data-bs-target="#sessionsCarousel" data-bs-slide="prev"></i>
                            </div>
                            <div class="carousel-inner h-100 px-5">
                                <div 
                                    v-for="carouselSlideIndex in 3" 
                                    :key="carouselSlideIndex" 
                                    :class="{active : carouselSlideIndex==1}"
                                    class="carousel-item h-100"
                                >
                                    <div class="row h-100">
                                        <div 
                                            v-for="innerContentIndex in 4" 
                                            :key="innerContentIndex" 
                                            class="col-sm-3 px-3 h-100"
                                        >
                                            <div class="carousel-card text-center d-flex align-items-center justify-content-center h-100">
                                                Session {{(carouselSlideIndex-1) * 4  + innerContentIndex}}  <br>
                                                July 4, 2022<br>
                                                8 AM        <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i type="button" class="fas fa-3x fa-angle-right" data-bs-target="#sessionsCarousel" data-bs-slide="next"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Report -->
                    <div class="section-header pt-5 pb-5">
                        <p class="h4 text-gray-900">Progress Reports</p>
                    </div>
                    <div class="progress-report-container overflow-auto">
                        <div class="accordion" id="progressReportAccordion">
                            <div 
                                v-for="progressReportIndex in 4" 
                                :key="progressReportIndex" 
                                class="accordion-item"
                            >
                                <h5 class="accordion-header" :id="'heading'+progressReportIndex">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapse'+progressReportIndex" aria-expanded="false" :aria-controls="'collapse'+progressReportIndex">
                                        Progress Report {{progressReportIndex}}
                                    </button>
                                </h5>
                                <div :id="'collapse'+progressReportIndex" class="accordion-collapse collapse" :aria-labelledby="'heading'+progressReportIndex" data-bs-parent="#progressReportAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- MEMBERS LIST -->
                <div class="members-list-container pt-3 w-25">
                    <!-- Column Header -->
                    <div class="members-column-header pb-5">
                        <p class="h4 text-gray-900">Members</p>
                    </div>
                    <!-- Actual List -->
                    <div class="members-list border border-dark overflow-auto">
                        <!-- Tutors List -->
                        <div class="tutors-list p-3">
                            <div class="h5">Tutors</div>
                            <div>
                                <ul 
                                    v-for="tutorsIndex in 2" 
                                    :key="tutorsIndex" 
                                    class="list-unstyled"
                                >
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="img-container">
                                                <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                                <img v-if="tutorsIndex%2==1" class="online-indicator" src="./../../../public/crm-site/assets/img/green-circle.png" />
                                            </div>
                                            <div class="ml-3">First Name Last Name</div>
                                            <Link class="ml-auto"><i class="far fa-lg fa-comment-alt"></i></Link>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Students List -->
                        <div class="students-list p-3">
                            <div class="h5">Students</div>
                            <div>
                                <ul 
                                    v-for="studentsIndex in 10" 
                                    :key="studentsIndex" 
                                    class="list-unstyled"
                                >
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="img-container">
                                                <img class="profile-pic" src="./../../../public/marketing-site/assets/agency/img/avatar-1.png" />
                                                <img v-if="studentsIndex%2==1" class="online-indicator" src="./../../../public/crm-site/assets/img/green-circle.png" />
                                            </div>
                                            <div class="ml-3">First Name Last Name</div>
                                            <Link class="ml-auto"><i class="far fa-lg fa-comment-alt"></i></Link>
                                        </div>
                                    </li>
                                </ul>
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

.far {
    color: #757474;
}

.far:hover {
    color: #000;
}

.members-list-container {
    position: sticky;
    top: 2em;
    max-height: 90vh;
    display: inline-block;
}

.members-column-header {
    height: 5%;
    max-height: 5%;
}

.members-list {
    height: 95%;
    max-height: 95%;
}

.main-content {
    max-height: 100%;
    display: inline-block;
}

.announcement-container {
    height: 40%;
    max-height: 40%
}

.sessions-container {
    height: 15%;
    max-height: 15%
}

.progress-report-container {
    height: 30%;
    max-height: 30%
}

.section-header {
    height: 5%;
    max-height: 5%;
}

.announcement-list {
    background-color: #D9D9D9;
}

.carousel-card {
    border-radius: 10px;
    background-color: #D9D9D9;
    align-items: center;
}

.carousel-item {
    transition: transform 0.3s ease
}

.carousel-card:hover {
    color: white;
    background-color: #564F4F;
}
</style>
