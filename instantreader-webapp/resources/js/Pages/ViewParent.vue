<template>
    <AppLayout>
      <div class="container">
          <div class="pt-5 pb-5">
              <!-- Header with Back Button-->
              <div class="d-flex">
                <Link href="#" class="btn btn-primary btn-circle">
                    <i class="fas fa-angle-left"></i>
                </Link>
                <div class="ml-3">
                    <p class="h2 text-gray-900 mb-4">VIEW PARENT</p>
                </div>
              </div>
              
              <!-- Main Table -->
              <div class="table-responsive mt-5">
                  <table class="table table-striped table-hover text-center" id="manageClassroomsTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-gray-900">
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Contact Number</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody class="text-gray-900">
                        <tr>
                            <td class="align-middle">Jenel</td>
                            <td class="align-middle">Juju</td>
                            <td class="align-middle">09123456789</td>
                            <td class="align-middle">juju@gmail.com</td>
                            <td class="align-middle">Calamba, Laguna</td>
                            <td class="align-middle">
                              <Link href="#"><i class="fas fa-pen mr-3"></i></Link>
                              <Link href="#"><i class="fas fa-trash ml-3"></i></Link>
                            </td>
                        </tr>
                      </tbody>
                  </table>
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

tr{
  line-height: 50px;
  min-height: 50px;
  height: 50px;
}

</style>
