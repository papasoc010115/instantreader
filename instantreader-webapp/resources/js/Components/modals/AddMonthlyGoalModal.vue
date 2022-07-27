<!-- 
	Please check the README inside the modals directory for the instructions/guide on using modal components.

	by: rmhizon
-->

<template>
    <!-- Background -->
    <div class="background flex-container-center" v-if="show">
        <!-- Main Modal -->
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3>Monthly Goal</h3>
                <span class="close" @click="removeModal">&times</span>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form class="row">
                    <div class="col-md-12 py-3">
                        <label class="form-label" for="month">Month</label>
                        <select
                            id="month"
                            class="form-select"
                            aria-label="select month"
                            required
                        >
                            <option selected disabled>Select Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="col-md-12 py-2">
                        <label for="monthly-goal" class="form-label"
                            >Goal</label
                        >
                        <input
                            type="text"
                            id="monthly-goal"
                            class="form-control"
                            required
                        />
                    </div>
                </form>
                <div class="btn-container">
                    <button
                        @click="removeModal"
                        type="button"
                        class="btn btn-secondary"
                    >
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary">
                        Add Goal
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["show"],
    methods: {
        removeModal() {
            this.$emit("close");
        },
    },
};
</script>

<style scoped>
@import "../../../../public/crm-site/assets/css/sb-admin-2.css";
button {
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
}
.background {
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
}

.flex-container-center {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.modal-content {
    position: relative;
    background-color: #f6f0f0;
    width: 500px;
    max-width: 85%;
}

.modal-header {
    background-color: white;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.4);
    color: #282525;
    display: flex;
}
.modal-header h3 {
    font-size: 1.7rem;
    margin: 5px 0;
}

.modal-body {
    padding: 2rem 3rem;
}

.btn-container {
    margin-top: 1rem;
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.close {
    color: #aaaaaa;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #282525;
    text-decoration: none;
    cursor: pointer;
}
</style>
