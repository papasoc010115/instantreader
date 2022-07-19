<template>
    <div class="sidebar col-lg-auto bg-light sticky-top">
        <div
            class="d-flex flex-lg-column flex-row flex-nowrap bg-light align-items-center sticky-top"
        >
            <ul
                class="nav nav-pills nav-flush flex-lg-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center"
            >
                <li class="nav-item">
                    <a href="#" class="nav-link" title="manage users">
                        <span title="Manage Users"
                            ><i class="fas fa-users nav-icon"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" title="manage calendar">
                        <i class="fas fa-calendar nav-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" title="manage classroom">
                        <i class="fas fa-chalkboard nav-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" title="manage tutors">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {};
</script>

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
}

.nav-link {
    padding: 0;
    margin: 2rem 1.5rem;
}

.nav-icon:hover {
    color: #4b4b4a;
}

.active {
    color: black !important;
}

@media only screen and (max-width: 575px) {
    .nav-link {
        padding: 0;
        margin: 2rem 2rem;
    }
}
</style>
