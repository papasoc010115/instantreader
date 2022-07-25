<!-- 
	Please check the README inside the modals directory for the instructions/guide on using modal components.

	by: rmhizon
-->

<template>
    <!-- Background -->
    <div class="background flex-container-center" v-if="show">
        <!-- Form -->
        <div class="container form-container">
            <div class="form-header">
                <h3>
                    Edit Event
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
                            :value="title"
                            required
                        />
                    </div>

                    <!-- All day or Not -->
                    <div class="col-md-12 py-3">
                        <label>Time Duration</label>
                        <div class="radio-container">
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="dur-optradio"
                                    :checked="allDayProp"
                                    required
                                    @click="allDayProp = true"
                                />
                                One Whole Day
                            </label>
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="dur-optradio"
                                    :checked="!allDayProp"
                                    @click="allDayProp = false"
                                />
                                Custom
                            </label>
                        </div>
                    </div>

                    <!-- Date -->
                    <div class="col-lg-4 py-2">
                        <label
                            v-if="!allDayProp"
                            class="form-label"
                            for="start-event-date"
                            >Start Date
                        </label>
                        <label v-else class="form-label" for="start-event-date"
                            >Date
                        </label>
                        <input
                            type="date"
                            class="form-control picker"
                            id="start-event-date"
                            name="start-event-date"
                            :value="startDate"
                            required
                        />
                    </div>
                    <div v-if="!allDayProp" class="col-lg-8 py-3">
                        <label class="form-label" for="end-event-date"
                            >End Date
                        </label>
                        <input
                            type="date"
                            class="form-control picker"
                            id="end-event-date"
                            name="end-event-date"
                            :value="endDate"
                            required
                        />
                    </div>

                    <!-- Start time -->
                    <div v-if="!allDayProp" class="col-lg-4">
                        <label class="form-label" for="start-time"
                            >Start Time
                        </label>
                        <input
                            type="time"
                            class="form-control picker"
                            id="start-time"
                            name="start-time"
                            :value="startTime"
                            required
                        />
                    </div>

                    <!-- End time -->
                    <div v-if="!allDayProp" class="col-lg-8">
                        <label class="form-label" for="end-time"
                            >End Time
                        </label>
                        <input
                            type="time"
                            class="form-control picker"
                            id="end-time"
                            name="end-time"
                            :value="endTime"
                            required
                        />
                    </div>

                    <!-- Color -->
                    <div class="col-md-12 py-3">
                        <label>Color</label>
                        <div class="radio-container">
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="optradio"
                                    :checked="color === red"
                                    required
                                />
                                Red
                            </label>
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="optradio"
                                    :checked="color === yellow"
                                />
                                Yellow
                            </label>
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="optradio"
                                    :checked="color === ''"
                                />
                                Blue
                            </label>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="btn-container">
                        <button
                            @click="removeModal"
                            type="button"
                            class="btn btn-gray"
                        >
                            Delete Event
                        </button>
                        <button type="button" class="btn btn-dark">
                            Update Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        "show",
        "id",
        "title",
        "allDayProp",
        "startDate",
        "endDate",
        "startTime",
        "endTime",
        "color",
    ],

    data() {
        return {
            blue: "", // defaults to the color blue
            red: "#fc3f3f",
            yellow: "#FFC100",
        };
    },

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

.btn-container {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.btn-dark {
    background-color: rgb(27, 26, 26) !important;
    color: white !important;
    font-weight: 500 !important;
}

.btn-dark:hover {
    background-color: black !important;
    color: rgba(255, 255, 255, 0.945) !important;
}

.btn-gray {
    background-color: rgb(118, 130, 142) !important;
    color: white !important;
    font-weight: 500 !important;
}

.btn-gray:hover {
    background-color: rgb(76, 82, 88) !important;
    color: white !important;
}

.radio-container {
    display: flex;
    gap: 1.4rem;
}

.btn-text {
    font-weight: 500;
}
</style>
