<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="pt-5 pb-5">
                <!-- Header and Add Goal Button -->
                <div class="d-flex">
                    <div>
                        <p class="h2 text-gray-900 mb-4">CUSTOMER ANALYTICS</p>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Card -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Lorem Ipsum</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">40,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-yellow shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-yellow text-uppercase mb-1">
                                            Lorem Ipsum</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">44%</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-red shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-red text-uppercase mb-1">
                                            Lorem Ipsum</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">2,050</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-green shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-green text-uppercase mb-1">
                                            Lorem Ipsum</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">10,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- First chart -->
                    <div class="col-lg-7 align-items-stretch">
                        <div class="card shadow mb-4">
                            <!-- Card Header -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Website Visitors</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <div class="chart-area">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Second chart -->
                    <div class="col-lg-5 align-items-stretch">
                        <div class="card shadow mb-4">
                            <!-- Card Header -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Lorem Ipsum</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <div class="chart-area">
                                    <canvas id="donutChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Third chart -->
                    <div class="col-lg-6 align-items-stretch">
                        <div class="card shadow mb-4">
                            <!-- Card Header -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Lorem Ipsum</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <div class="chart-area">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Fourth chart -->
                    <div class="col-lg-6 align-items-stretch">
                        <div class="card shadow mb-4">
                            <!-- Card Header -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Lorem Ipsum</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <div class="chart-area">
                                    <canvas id="barChart2"></canvas>
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
import Chart from 'chart.js/auto';

export default {
    components: {
        Link,
        AppLayout,
    },
    mounted() {
        const ctx1 = document.getElementById("lineChart");

        const lineLabels = ["2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015"];
        const lineData = {
            labels: lineLabels,
            datasets: [{
                label: 'Lorem ipsum',
                data: [130000, 120000, 110000, 115000, 250000, 100000, 140000, 115000, 170000, 210000, 110000, 150000],
                fill: false,
                borderColor: '#FFD874',
                tension: 0.1
            },
            ]
        };

        //Line Chart (Chart 1)
        const lineChart = new Chart(ctx1, {
            type: 'line',
            data: lineData,
            options: {
                maintainAspectRatio: false,
                scales: {
                y: {
                    beginAtZero: true
                    }
                }
            }
        });

        //Doughnut Chart (Chart 2)
        const ctx2 = document.getElementById("donutChart");

        const donutData = {
            labels: [
                'Traditional',
                'Facebook',
                'Website'
            ],
            datasets: [{
                data: [11310, 5891, 2356],
                backgroundColor: [
                '#00BCD4',
                '#448AFF',
                '#3F51B5',
                ],
                hoverOffset: 4
            }]
        };

        const donutChart = new Chart(ctx2, {
            type: 'doughnut',
            data: donutData,
            options: {
                maintainAspectRatio: false,
            }
        });

        //Bar Chart (Chart 3)
        const ctx3 = document.getElementById("barChart");

        const barLabels = ["2022", "2023", "2024", "2025", "2026"];
        const barData = {
            labels: barLabels,
            datasets: [{
                label: 'Lorem ipsum',
                data: [4100000, 5200000, 5000000, 5700000, 5800000],
                backgroundColor: '#4e73df',
                borderColor: '#4e73df',
                borderWidth: 1
            }]
        };

        const barChart = new Chart(ctx3, {
            type: 'bar',
            data: barData,
            options: {
                indexAxis: 'y',
                maintainAspectRatio: false,
                scales: {
                y: {
                    beginAtZero: true
                    }
                }
            }
        });

        //Bar Chart (Chart 4)
        const ctx4 = document.getElementById("barChart2");

        const barLabels2 = ["January", "February", "March", "April", "May", "June"];
        const barData2 = {
            labels: barLabels2,
            datasets: [{
                label: 'Lorem ipsum',
                data: [1200, 2330, 1870, 4280, 3525, 3100],
                backgroundColor: '#FF6363',
                borderColor: '#FF6363',
                borderWidth: 1
            }]
        };

        const barChart2 = new Chart(ctx4, {
            type: 'bar',
            data: barData2,
            options: {
                indexAxis: 'y',
                maintainAspectRatio: false,
                scales: {
                y: {
                    beginAtZero: true
                    }
                }
            }
        });
        
        lineChart;
        donutChart;
        barChart;
        barChart2;
    },
};
</script>

<style scoped>
@import "../../../public/crm-site/assets/css/sb-admin-2.css";
.h2 {
    font-weight: bold;
}

.border-left-yellow {
  border-left: 0.25rem solid #FEAC32 !important;
}

.border-left-red {
  border-left: 0.25rem solid #FF6363 !important;
}

.border-left-green {
  border-left: 0.25rem solid #29CB4D !important;
}

.text-yellow {
  color: #FEAC32 !important;
}

.text-red {
  color: #FF6363 !important;
}

.text-green {
  color: #29CB4D !important;
}

</style>
