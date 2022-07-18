<template>
    <AppLayout>
      <div class="container">
          <div class="pt-5 pb-5">
              <!-- Header with Back Button, Search Bar -->
              <div class="d-flex">
                <Link href="#" class="btn btn-primary btn-circle">
                    <i class="fas fa-angle-left"></i>
                </Link>
                <div class="ml-3">
                    <p class="h2 text-gray-900 mb-4">VIEW STUDENTS</p>
                </div>
                <div class="ml-auto">
                    <form
                      class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                      <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                              aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                              </button>
                          </div>
                      </div>
                    </form>
                </div> 
              </div>
              
              <!-- Main Table -->
              <div class="table-responsive mt-5">
                  <table class="table table-striped table-hover text-center" id="manageClassroomsTable" width="100%" cellspacing="0">
                      <thead>
                          <tr class="text-gray-900">
                              <th>Student ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Level</th>
                              <th>Schedule</th>
                              <th>Parent</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody class="text-gray-900">
                        <tr>
                            <td class="align-middle">LB-02001</td>
                            <td class="align-middle">Skye</td>
                            <td class="align-middle">Ramos</td>
                            <td class="align-middle">Basic</td>
                            <td class="align-middle">
                              <p class="m-0 p-0">MWF</p>
                              <p class="m-0 p-0">10:00 am - 11:00 am</p>
                            </td>
                            <td class="align-middle">
                              <Link href="#">Jenel Juju</Link>
                            </td>
                            <td class="align-middle">
                              <Link href="#"><i class="fas fa-pen mr-3"></i></Link>
                              <Link href="#"><i class="fas fa-trash ml-3"></i></Link>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">LB-10900</td>
                            <td class="align-middle">Reyna</td>
                            <td class="align-middle">Santos</td>
                            <td class="align-middle">Mastery</td>
                            <td class="align-middle">
                              <p class="m-0 p-0">TTh</p>
                              <p class="m-0 p-0">10:00 am - 11:00 am</p>
                            </td>
                            <td class="align-middle">
                              <Link href="#">Aila Mae</Link>
                            </td>
                            <td class="align-middle">
                              <Link href="#"><i class="fas fa-pen mr-3"></i></Link>
                              <Link href="#"><i class="fas fa-trash ml-3"></i></Link>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">LB-00013</td>
                            <td class="align-middle">Sage</td>
                            <td class="align-middle">Wong</td>
                            <td class="align-middle">Compass</td>
                            <td class="align-middle">
                              <p class="m-0 p-0">MWF</p>
                              <p class="m-0 p-0">9:00 am - 10:00 am</p>
                            </td>
                            <td class="align-middle">
                              <Link href="#">Kathleen Joyce</Link>
                            </td>
                            <td class="align-middle">
                              <Link href="#"><i class="fas fa-pen mr-3"></i></Link>
                              <Link href="#"><i class="fas fa-trash ml-3"></i></Link>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">LB-02001</td>
                            <td class="align-middle">Skye</td>
                            <td class="align-middle">Ramos</td>
                            <td class="align-middle">Basic</td>
                            <td class="align-middle">
                              <p class="m-0 p-0">MWF</p>
                              <p class="m-0 p-0">10:00 am - 11:00 am</p>
                            </td>
                            <td class="align-middle">
                              <Link href="#">Jenel Juju</Link>
                            </td>
                            <td class="align-middle">
                              <Link href="#"><i class="fas fa-pen mr-3"></i></Link>
                              <Link href="#"><i class="fas fa-trash ml-3"></i></Link>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">LB-10900</td>
                            <td class="align-middle">Reyna</td>
                            <td class="align-middle">Santos</td>
                            <td class="align-middle">Mastery</td>
                            <td class="align-middle">
                              <p class="m-0 p-0">TTh</p>
                              <p class="m-0 p-0">10:00 am - 11:00 am</p>
                            </td>
                            <td class="align-middle">
                              <Link href="#">Aila Mae</Link>
                            </td>
                            <td class="align-middle">
                              <Link href="#"><i class="fas fa-pen mr-3"></i></Link>
                              <Link href="#"><i class="fas fa-trash ml-3"></i></Link>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">LB-00013</td>
                            <td class="align-middle">Sage</td>
                            <td class="align-middle">Wong</td>
                            <td class="align-middle">Compass</td>
                            <td class="align-middle">
                              <p class="m-0 p-0">MWF</p>
                              <p class="m-0 p-0">9:00 am - 10:00 am</p>
                            </td>
                            <td class="align-middle">
                              <Link href="#">Kathleen Joyce</Link>
                            </td>
                            <td class="align-middle">
                              <Link href="#"><i class="fas fa-pen mr-3"></i></Link>
                              <Link href="#"><i class="fas fa-trash ml-3"></i></Link>
                            </td>
                        </tr>
                      </tbody>
                  </table>
              </div>

              <!-- Add Class & Pagination -->
              <div class="d-flex pt-3">
                <div>
                  <Link href="#" class="btn btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                          <i class="fas fa-plus"></i>
                      </span>
                      <span class="text">Add Student</span>
                  </Link>
                </div>
                <div class="ml-auto">
                  <nav class="text-center">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
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
