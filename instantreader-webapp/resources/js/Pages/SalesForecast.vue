<template>
    <AppLayout>
        <div class="container-fluid">
            <div class="pt-5 pb-5">
                <!-- Header and Add Goal Button -->
                <div class="d-flex">
                    <div>
                        <p class="h2 text-gray-900 mb-4 font-weight-bold">SALES, TARGET, CURRENT, AND FORECAST</p>
                    </div>
                    <div class="ml-auto">
                        <div>
                            <Link href="/crm/admin/manage-users/create-user" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Goal</span>
                            </Link>
                        </div>
                    </div>
                </div>
            
                <!-- Yearly/Monthly and Branch Selection -->
                <div class="row mt-2 mb-4">
                    <form>
                        <div class="form-group row mb-3 ml-2 col-lg-6">
                            <div class="col-lg-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Yearly</label>
                            </div>
                            <div class="col-lg-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio2">Monthly</label>
                            </div>
                            <div class="col-lg-6">
                                <select class="custom-select" id="tutorBranch">
                                    <label class="mr-3">Branch</label>
                                    <option selected disabled>Branch</option>
                                    <option value="Cabuyao">Cabuyao</option>
                                    <option value="Calamba">Calamba</option>
                                    <option value="Los Banos">Los Banos</option>
                                    <option value="Sta. Rosa">Sta. Rosa</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Income Goal vs Generated Profit -->
                <div class="row mb-5">
                    <div>
                        <p class="h4 text-gray-900 mb-4">Income Goal vs Generated Profit</p>
                    </div>
                    <div class="line-chart-container">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>

                <div class="row">
                    <!-- Potential revenue chart -->
                    <div class="col-lg-6 align-items-stretch">
                        <div>
                            <p class="h4 text-gray-900 mb-3">Potential Revenue</p>
                        </div>
                        <div class="card shadow mb-4">
                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <div class="chart-area">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Sales chart -->
                    <div class="col-lg-6 align-items-stretch">
                        <div>
                            <p class="h4 text-gray-900 mb-3">Product Sales</p>
                        </div>
                        <div class="card shadow mb-4">
                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <div class="chart-area">
                                    <canvas id="donutChart"></canvas>
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
                label: 'Income Goal',
                data: [1000000, 1200000, 1100000, 1150000, 950000, 1000000, 1400000, 1150000, 1700000, 2100000, 1100000, 1500000],
                fill: false,
                borderColor: '#FFD874',
                tension: 0.1
            },{
                label: 'Generated Goal',
                data: [1100000, 1400000, 1000000, 1300000, 1100000, 1250000, 1700000, 1240000, 2000000, 3000000, 3400000, 3800000],
                fill: false,
                borderColor: '#4ABACF',
                tension: 0.1
            }
            ]
        };

        const lineChart = new Chart(ctx1, {
            type: 'line',
            data: lineData,
            options: {
                maintainAspectRatio: false,
            }
        });

        const ctx2 = document.getElementById("barChart");

        const barLabels = ["2022", "2023", "2024", "2025", "2026"];
        const barData = {
            labels: barLabels,
            datasets: [{
                label: 'Estimated Revenue',
                data: [4100000, 5200000, 5000000, 5700000, 5800000],
                backgroundColor: '#4ABACF',
                borderColor: '#4ABACF',
                borderWidth: 1
            }]
        };

        const barChart = new Chart(ctx2, {
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

        const ctx3 = document.getElementById("donutChart");

        const donutData = {
            labels: [
                'Basic',
                'Advance',
                'Mastery',
                'Compass'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [11310, 5891, 2356, 4004],
                backgroundColor: [
                '#00BCD4',
                '#448AFF',
                '#3F51B5',
                '#0F1F7A'
                ],
                hoverOffset: 4
            }]
        };

        const donutChart = new Chart(ctx3, {
            type: 'doughnut',
            data: donutData,
            options: {
                maintainAspectRatio: false,
            }
        });
        
        lineChart;
        barChart;
        donutChart;
    },
};
</script>

<style scoped>
@import "../../../public/crm-site/assets/css/sb-admin-2.css";
.line-chart-container {
    width: 85%; 
    height: 15em; 
    margin: auto;
}
</style>
