<!-- 
    This is the Calendar page for non-admins. This is for viewing events
    by: rmhizon
 -->

<template>
    <AppLayout>
        <div class="calendar-container">
            <!-- Main Calendar -->
            <FullCalendar :options="calendarOptions" />
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

export default {
    components: {
        AppLayout,
        FullCalendar,
    },
    data() {
        return {
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

                // for other actions
                navLinks: true,
            },
        };
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
