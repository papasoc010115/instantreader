<!-- 
    This is the Calendar page for the admins. This is for creating, editing, viewing, and deleting events.

    by: rmhizon
 -->

<template>
    <AppLayout>
        <div class="calendar-container">
            <!-- Main Calendar -->
            <FullCalendar :options="calendarOptions" />
            <!-- Add Event Modal -->
            <AddEventModal
                :show="toggle"
                :allDay="true"
                @close="handleCloseModal"
            />
            <!-- Update Event Modal -->
            <EditEventModal
                :show="editToggle"
                @close="handleCloseEditModal"
                :id="event_buffer.id"
                :title="event_buffer.title"
                :allDay="event_buffer.allDay"
                :startDate="event_buffer.startDate"
                :endDate="event_buffer.endDate"
                :startTime="event_buffer.startTime"
                :endTime="event_buffer.endTime"
                :color="event_buffer.backgroundColor"
            />
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
import EditEventModal from "@/Components/modals/EditEventModal.vue";

export default {
    components: {
        AppLayout,
        FullCalendar,
        AddEventModal,
        EditEventModal,
        FloatingActionButton,
    },
    data() {
        return {
            toggle: false, // for AddEventModal
            editToggle: false, // for EditEventModal
            // event temporary holder (for parsing)
            event_buffer: {
                id: "",
                title: "",
                allDay: true,
                startDate: "",
                endDate: "",
                startTime: "",
                endTime: "",
                backgroundColor: "",
            },

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
                        allDay: false,
                        start: "2022-07-01T04:30:00",
                        end: "2022-07-01T09:30:00",
                    },
                    {
                        id: "2",
                        title: "Meeting with admins",
                        allDay: false,
                        start: "2022-07-01T06:30:00",
                        end: "2022-07-01T07:30:00",
                    },
                    {
                        id: "3",
                        title: "Meeting with teachers",
                        allDay: false,
                        start: "2022-07-01T07:30:00",
                        end: "2022-07-01T08:30:00",
                    },
                    {
                        id: "4",
                        title: "Meeting with students",
                        allDay: false,
                        start: "2022-07-01T08:30:00",
                        end: "2022-07-01T09:30:00",
                    },
                    {
                        id: "5",
                        title: "Meeting with investors",
                        allDay: false,
                        start: "2022-07-01T09:30:00",
                        end: "2022-07-01T10:30:00",
                    },
                    {
                        id: "6",
                        title: "Meeting with CEO",
                        allDay: false,
                        start: "2022-07-01T10:30:00",
                        end: "2022-07-01T11:30:00",
                    },
                    {
                        id: "7",
                        title: "Meeting with project manager",
                        allDay: false,
                        start: "2022-07-01T11:30:00",
                        end: "2022-07-01T12:30:00",
                    },
                    {
                        id: "8",
                        title: "Website Test",
                        allDay: false,
                        start: "2022-07-06T04:30:00",
                        end: "2022-07-07T06:30:00",
                    },

                    {
                        id: "9",
                        title: "Project Planning",
                        allDay: true,
                        start: "2022-06-27",
                        end: "2022-06-27",
                        color: "#FFC100",
                    },
                    {
                        id: "10",
                        title: "Celebration",
                        allDay: true,
                        start: "2022-07-09",
                        end: null,
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
                moreLinkClick: "popover",

                // for manipulation and other actions
                dateClick: this.handleDateClick,
                editable: true,
                eventResizableFromStart: true,
                dayMaxEventRows: true,
                eventResize: this.handleEventChange,
                eventDrop: this.handleEventChange,
                navLinks: true,
                eventClick: this.handleEventClick,
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

        // for handling event clicks
        handleEventClick: function (arg) {
            const temp = arg.event;
            let updated_event = {
                id: temp.id,
                title: temp.title,
                allDay: temp.allDay,
                startDate: "",
                endDate: "",
                startTime: "",
                endTime: "",
                backgroundColor: temp.backgroundColor,
            };
            // parsing objects from the fullcalendar API
            let getTime = false;
            for (let i = 0; i < temp.startStr.length; i++) {
                let curr = temp.startStr.charAt(i);
                if (curr === "T") {
                    getTime = true;
                    continue;
                }
                if (!getTime) {
                    updated_event.startDate = updated_event.startDate + curr;
                } else if (curr === "+") {
                    break;
                } else {
                    updated_event.startTime = updated_event.startTime + curr;
                }
            }
            getTime = false;
            for (let i = 0; i < temp.endStr.length; i++) {
                let curr = temp.endStr.charAt(i);
                if (curr === "T") {
                    getTime = true;
                    continue;
                }
                if (!getTime) {
                    updated_event.endDate = updated_event.endDate + curr;
                } else if (curr === "+") {
                    break;
                } else {
                    updated_event.endTime = updated_event.endTime + curr;
                }
            }
            this.event_buffer = updated_event;
            console.log(temp);
            this.editToggle = true;
        },

        // for closing the modal for adding events
        handleCloseModal: function () {
            this.toggle = false;
        },

        // for closing the modal for editing events
        handleCloseEditModal: function () {
            this.editToggle = false;
        },

        // for showing modal for adding events
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
