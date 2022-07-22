<template>
    <!-- Background -->
    <div class="background flex-container-center" v-if="show">
        <!-- Form -->
        <div class="container form-container">
            <div class="form-header">
                <h3>
                    New Event
                    <span @click="removeModal" class="close">&times;</span>
                </h3>
            </div>
            <div class="form-content">
                <form class="row g-3">
                    <!-- Event Name -->
                    <div class="col-md-12">
                        <label class="form-label" for="event-name"
                            >Event Name</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="event-name"
                            placeholder="e.g. Instant Reader 2.0 Launch"
                            required
                        />
                    </div>

                    <!-- Event Location -->
                    <div class="col-md-12">
                        <label class="form-label" for="event-location"
                            >Location</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="event-location"
                            placeholder="e.g. Chicago, USA"
                            required
                        />
                    </div>

                    <!-- Date -->
                    <div class="col-lg-4 py-3">
                        <label class="form-label" for="event-date"
                            >Start Date
                        </label>
                        <input
                            type="date"
                            class="form-control picker"
                            id="start-event-date"
                            name="start-event-date"
                        />
                    </div>
                    <div class="col-lg-8 py-3">
                        <label class="form-label" for="event-date"
                            >End Date
                        </label>
                        <input
                            type="date"
                            class="form-control picker"
                            id="end-event-date"
                            name="end-event-date"
                        />
                    </div>

                    <!-- Time -->
                    <!-- Start time -->
                    <div class="col-lg-4">
                        <label class="form-label" for="start-time"
                            >Start Time
                        </label>
                        <input
                            type="time"
                            class="form-control picker"
                            id="start-time"
                            name="start-time"
                        />
                    </div>

                    <!-- End time -->
                    <div class="col-lg-8">
                        <label class="form-label" for="end-time"
                            >End Time
                        </label>
                        <input
                            type="time"
                            class="form-control picker"
                            id="end-time"
                            name="end-time"
                        />
                    </div>

                    <!-- Color -->
                    <div class="col-md-12 py-3">
                        <label>Color</label>
                        <div class="radio-container py-3">
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="optradio"
                                    checked
                                />Red
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio" />Yellow
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio" />Blue
                            </label>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="col-md-12 py-2">
                        <button
                            type="submit"
                            class="btn btn-primary btn-user btn-block"
                        >
                            <span class="btn-text">Add Event</span>
                        </button>
                    </div>
                </form>
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

.form-container {
    margin: 0;
    padding: 0;
    background-color: #f6f0f0;
}

.form-header {
    background-color: white;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.4);
    color: #282525;
    padding: 1.8rem;
    font-size: 1.2rem;
}

.form-header h3 {
    margin-bottom: 0;
}

.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #282525;
    text-decoration: none;
    cursor: pointer;
}

.form-content {
    padding: 0 12rem 4rem 12rem;
    margin-top: 2rem;
}

.picker {
    width: min-content;
}

.radio-container {
    display: flex;
    gap: 1.4rem;
}

.btn {
    background-color: #5a88ff;
    color: white;
}

.btn-text {
    font-weight: 500;
}
</style>
