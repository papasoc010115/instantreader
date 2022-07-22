<template>
    <AppLayout>
        <div class="calendar-container">
            <!-- Main Calendar -->
            <FullCalendar :options="calendarOptions" />
            <!-- Modal -->
            <AddEventModal :show="toggle" @close="handleCloseModal" />
            <!-- FLoating Action Button -->
            <FloatingActionButton @press="addEvent" :show="!toggle" />
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/AppLayout.vue";
import FloatingActionButton from "@/Components/FloatingActionButton.vue";
import "@fullcalendar/core/vdom"; // solves problem with Vite
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";
import interactionPlugin from "@fullcalendar/interaction";
import AddEventModal from "@/Components/modals/AddEventModal.vue";

export default {
    components: {
        AppLayout,
        FullCalendar,
        AddEventModal,
        FloatingActionButton,
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
                events: [
                    {
                        title: "Meeting with interns",
                        start: "2022-07-01T04:30:00",
                        end: "2022-07-01T06:30:00",
                    },
                    {
                        title: "Meeting with admins",
                        start: "2022-07-01T06:30:00",
                        end: "2022-07-01T07:30:00",
                    },
                    {
                        title: "Website Test (Click me)",
                        start: "2022-07-06T04:30:00",
                        end: "2022-07-07T06:30:00",
                        url: "/",
                    },

                    {
                        title: "Project Planning",
                        start: "2022-06-27",
                        end: "2022-06-27",
                        color: "#FFC100",
                    },
                    {
                        title: "Celebration",
                        start: "2022-07-09",
                        end: "2022-07-09",
                        color: "#fc3f3f",
                    },
                ],
                initialView: "dayGridMonth",
                dateClick: this.handleDateClick,
            },
        };
    },

    methods: {
        // click handler for the calendar cells
        handleDateClick: function (arg) {
            alert("date click! " + arg.dateStr);
        },

        // for closing the modal
        handleCloseModal: function () {
            this.toggle = false;
        },

        addEvent: function () {
            this.toggle = true;
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
    background-color: rgba(150, 235, 235, 0.4);
}
</style>
