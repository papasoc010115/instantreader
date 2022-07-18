<!-- by: ecdcabalda -->

<template>
    <AppLayout>
        <div class="container">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="p-5 form-container">
                    <!-- Header with Back Button -->
                    <div class="form-title-container">
                        <Link href="#" class="btn btn-primary btn-circle">
                            <i class="fas fa-angle-left"></i>
                        </Link>
                        <p class="h2 text-gray-900 form-title">CREATE STUDENT</p>
                    </div>

                    <!-- Form Proper -->
                    <form class="user p-5">
                        <!-- Name Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <!-- Level Selector -->
                        <div class="form-group input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option disabled selected>Level</option>
                                <option value="1">Basic</option>
                                <option value="2">Advanced</option>
                                <option value="3">Mastery</option>
                                <option value="3">Compass</option>
                            </select>
                        </div>
                        <!-- Day Selector -->
                        <div class="form-group input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option disabled selected>Day</option>
                                <option value="1">MWF</option>
                                <option value="2">TTh</option>
                            </select>
                        </div>
                        <!-- Time Selector -->
                        <div class="form-group input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option disabled selected>Time</option>
                                <option value="1">9:00 am - 10:00 am</option>
                                <option value="2">10:00 am - 11:00 am</option>
                                <option value="3">11:00 am - 12:00 am</option>
                            </select>
                        </div>
                        <!-- Parent Field -->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-user" id="exampleLastName"
                                placeholder="Parent">
                        </div>
                        <!-- Create Button -->
                        <div class="form-group">
                            <Link href="#" class="btn btn-primary btn-user btn-block">
                                Create
                            </Link>
                        </div>
                    </form>
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
    data() {
    },
    methods: {
    },
};
</script>

<style scoped>

@import "../../../public/crm/assets/css/sb-admin-2.css";

.form-container{
  width: 100%;
}

.form-title-container{
  display: flex;
  margin: 0px 0px 40px 0px;
}

.form-title{
  margin: 0px 0px 0px 20px;
}

.custom-select{
    font-size: 0.8rem;
    border-radius: 10rem;
    height:50px;
    color: #858796;
    opacity: 1;
}

</style>
