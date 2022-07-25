<!-- 
    This is the Calendar page for the admins. This is for creating, editing, viewing, and deleting events.

    by: rmhizon
 -->

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

            // These are calendar options
            calendarOptions: {
                //  plugins
                plugins: [
                    dayGridPlugin,
                    timeGridPlugin,
                    listPlugin,
                    interactionPlugin,
                ],

                // header's widgets
                headerToolbar: {
                    left: "prev,today,next",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay",
                },
                // events list
                events: [
                    {
                        id: "1",
                        title: "Meeting with interns",
                        start: "2022-07-01T04:30:00",
                        end: "2022-07-01T09:30:00",
                    },
                    {
                        id: "2",
                        title: "Meeting with admins",
                        start: "2022-07-01T06:30:00",
                        end: "2022-07-01T07:30:00",
                    },
                    {
                        id: "3",
                        title: "Meeting with teachers",
                        start: "2022-07-01T07:30:00",
                        end: "2022-07-01T08:30:00",
                    },
                    {
                        id: "4",
                        title: "Meeting with students",
                        start: "2022-07-01T08:30:00",
                        end: "2022-07-01T09:30:00",
                    },
                    {
                        id: "5",
                        title: "Meeting with investors",
                        start: "2022-07-01T09:30:00",
                        end: "2022-07-01T10:30:00",
                    },
                    {
                        id: "6",
                        title: "Meeting with CEO",
                        start: "2022-07-01T10:30:00",
                        end: "2022-07-01T11:30:00",
                    },
                    {
                        id: "7",
                        title: "Meeting with project manager",
                        start: "2022-07-01T11:30:00",
                        end: "2022-07-01T12:30:00",
                    },
                    {
                        id: "8",
                        title: "Website Test (Click me)",
                        start: "2022-07-06T04:30:00",
                        end: "2022-07-07T06:30:00",
                        url: "/",
                    },

                    {
                        id: "9",
                        title: "Project Planning",
                        start: "2022-06-27",
                        end: "2022-06-27",
                        color: "#FFC100",
                    },
                    {
                        id: "10",
                        title: "Celebration",
                        start: "2022-07-09",
                        end: "2022-07-09",
                        color: "#fc3f3f",
                    },
                ],

                // view configurations
                initialView: "dayGridMonth",
                views: {
                    dayGrid: {
                        dayMaxEvents: true,
                    },
                },
                moreLinkClick: "day",

                // for manipulation and other actions
                dateClick: this.handleDateClick,
                editable: true,
                eventResizableFromStart: true,
                dayMaxEventRows: true,
                eventResize: this.handleEventChange,
                eventDrop: this.handleEventChange,
                navLinks: true,
            },
        };
    },

    methods: {
        // click handler for the calendar cells
        handleDateClick: function (arg) {
            // alert("date click! " + arg.dateStr);
            console.log(arg.dateStr);
        },

        // for handling event changes
        handleEventChange: function (info) {
            // alert(
            //     info.event.title + " end is now " + info.event.end.toISOString()
            // );

            // if (!confirm("is this okay?")) {
            //     info.revert();
            // }
            console.log(
                "ID: " +
                    info.event.id +
                    "\nstart: " +
                    info.event.start +
                    "\nend: " +
                    info.event.end
            );
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
    /* cursor: pointer; */
    background-color: #ebf8fb;
}
</style>
