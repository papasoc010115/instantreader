<template>
    <AppLayout>
        <div class="calendar-container">
            <!-- Main Calendar -->
            <FullCalendar :options="calendarOptions" />
            <!-- Modal -->
            <AddEventModal :show="toggle" @close="handleCloseModal" />
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/AppLayout.vue";
import "@fullcalendar/core/vdom"; // solves problem with Vite
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";
import interactionPlugin from "@fullcalendar/interaction";
import AddEventModalVue from "@/Components/modals/AddEventModal.vue";
import AddEventModal from "@/Components/modals/AddEventModal.vue";

export default {
    components: {
        AppLayout,
        AddEventModalVue,
        FullCalendar,
        AddEventModal,
    },
    data() {
        return {
            toggle: false,
            calendarOptions: {
                // These are calendar options
                plugins: [
                    dayGridPlugin,
                    timeGridPlugin,
                    listPlugin,
                    interactionPlugin,
                ],
                headerToolbar: {
                    left: "prev,today,next",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay",
                },
                initialView: "dayGridMonth",
                dateClick: this.handleDateClick,
            },
        };
    },

    methods: {
        // click handler for the calendar cells
        handleDateClick: function (arg) {
            this.toggle = true; // for opening the modal
            console.log("date click! " + arg.dateStr);
        },

        // for closing the modal
        handleCloseModal: function () {
            this.toggle = false;
        },
    },
};
</script>

<style>
.calendar-container {
    padding: 2rem 3rem;
}

.fc-daygrid-day-frame:hover {
    cursor: pointer;
    background-color: azure;
}
</style>
