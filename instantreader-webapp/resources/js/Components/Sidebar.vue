<!-- 
    This is the Sidebar component for the CRM. 
    This will be used to navigate to different pages under the different nav links of the topbar.
    The set of nav links of the sidebar changes according to the selected nav link of the topbar.
    This works by checking the path that the user is currently in.
    Example:  <div v-if="$page.url.includes('/admin')">Render me if we are under /admin route </div>

    by: rmhizon
 -->

<template>
    <!-- Admin Sidebar -->
    <div
        v-if="$page.url.includes('/admin')"
        class="sidebar col-lg-auto bg-light sticky-top"
    >
        <div
            class="d-flex flex-lg-column flex-row flex-nowrap bg-light align-items-center sticky-top"
        >
            <ul
                class="nav nav-pills nav-flush flex-lg-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center"
            >
                <li class="nav-item">
                    <Link
                        href="/crm/admin/manage-users"
                        class="nav-link"
                        title="Manage Users"
                    >
                        <i
                            class="fas fa-users nav-icon"
                            :class="{
                                activeSection:
                                    $page.url === '/crm/admin/manage-users',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/admin/manage-calendar"
                        class="nav-link"
                        title="Manage Calendar"
                    >
                        <i
                            class="fas fa-calendar nav-icon"
                            :class="{
                                activeSection:
                                    $page.url === '/crm/admin/manage-calendar',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/admin/manage-classrooms"
                        class="nav-link"
                        title="Manage Classroom"
                    >
                        <i
                            class="fas fa-chalkboard nav-icon"
                            :class="{
                                activeSection:
                                    $page.url ===
                                    '/crm/admin/manage-classrooms',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/admin/manage-tutors"
                        class="nav-link"
                        title="Manage Tutors"
                    >
                        <i
                            class="fas fa-chalkboard-teacher nav-icon"
                            :class="{
                                activeSection:
                                    $page.url === '/crm/admin/manage-tutors',
                            }"
                        ></i>
                    </Link>
                </li>
            </ul>
        </div>
    </div>

    <!-- Operations Sidebar -->
    <div
        v-if="$page.url.includes('/operations')"
        class="sidebar col-lg-auto bg-light sticky-top"
    >
        <div
            class="d-flex flex-lg-column flex-row flex-nowrap bg-light align-items-center sticky-top"
        >
            <ul
                class="nav nav-pills nav-flush flex-lg-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center"
            >
                <li class="nav-item">
                    <Link
                        href="/crm/operations/bulletin-board"
                        class="nav-link"
                        title="Bulletin Board"
                    >
                        <i
                            class="fas fa-clipboard-list nav-icon"
                            :class="{
                                activeSection:
                                    $page.url ===
                                    '/crm/operations/bulletin-board',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/operations/classrooms"
                        class="nav-link"
                        title="Classrooms"
                    >
                        <i
                            class="fas fa-graduation-cap nav-icon"
                            :class="{
                                activeSection:
                                    $page.url === '/crm/operations/classrooms',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/operations/tutors-lounge"
                        class="nav-link"
                        title="Tutor's Lounge"
                    >
                        <i
                            class="fas fa-book-reader nav-icon"
                            :class="{
                                activeSection:
                                    $page.url ===
                                    '/crm/operations/tutors-lounge',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/operations/ir-calendar"
                        class="nav-link"
                        title="IR Calendar"
                    >
                        <i
                            class="fas fa-calendar-alt nav-icon"
                            :class="{
                                activeSection:
                                    $page.url === '/crm/operations/ir-calendar',
                            }"
                        ></i>
                    </Link>
                </li>
            </ul>
        </div>
    </div>

    <!-- Sales & Marketing -->
    <div
        v-if="$page.url.includes('/sales')"
        class="sidebar col-lg-auto bg-light sticky-top"
    >
        <div
            class="d-flex flex-lg-column flex-row flex-nowrap bg-light align-items-center sticky-top"
        >
            <ul
                class="nav nav-pills nav-flush flex-lg-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center"
            >
                <li class="nav-item">
                    <Link
                        href="/crm/sales/contact-management"
                        class="nav-link"
                        title="Contact Management"
                    >
                        <i
                            class="fas fa-address-book nav-icon"
                            :class="{
                                activeSection:
                                    $page.url ===
                                    '/crm/sales/contact-management',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/sales/client-interaction-tracking"
                        class="nav-link"
                        title="Client Interaction Tracking"
                    >
                        <i
                            class="fas fa-project-diagram nav-icon"
                            :class="{
                                activeSection:
                                    $page.url ===
                                    '/crm/sales/client-interaction-tracking',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/sales/lead-management"
                        class="nav-link"
                        title="Lead Management"
                    >
                        <i
                            class="fas fa-users-cog nav-con nav-icon"
                            :class="{
                                activeSection:
                                    $page.url === '/crm/sales/lead-management',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/sales/customer-analytics"
                        class="nav-link"
                        title="Customer Analytics"
                    >
                        <i
                            class="fas fa-chart-line nav-icon"
                            :class="{
                                activeSection:
                                    $page.url ===
                                    '/crm/sales/customer-analytics',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/sales/sales-forecast"
                        class="nav-link"
                        title="Sales and Forecast"
                    >
                        <i
                            class="fas fa-funnel-dollar nav-icon"
                            :class="{
                                activeSection:
                                    $page.url === '/crm/sales/sales-forecast',
                            }"
                        ></i>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/crm/sales/sales-activity"
                        class="nav-link"
                        title="Sales Activity Log"
                    >
                        <i
                            class="fas fa-stream nav-icon"
                            :class="{
                                activeSection:
                                    $page.url === '/crm/sales/sales-activity',
                            }"
                        ></i>
                    </Link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
};
</script>

<style>
.sidebar {
    z-index: 1; /* This allows the sidebar to be behind modals' backgrounds */
}
</style>

<style scoped>
ul {
    padding: 1.5rem 0;
}

li {
    padding: 0;
}
.sidebar {
    box-shadow: 0 2px 20px 0 rgba(0, 0, 0, 0.2);
}
.nav-icon {
    font-size: 1.4rem;
    color: #757474;
    cursor: pointer;
}

.nav-link {
    padding: 0;
    margin: 2rem 1.5rem;
}

.nav-icon:hover {
    color: #4b4b4a;
}

.activeSection {
    color: #5a88ff !important;
}

@media only screen and (max-width: 575px) {
    .nav-link {
        padding: 0;
        margin: 2rem 2rem;
    }
}
</style>
