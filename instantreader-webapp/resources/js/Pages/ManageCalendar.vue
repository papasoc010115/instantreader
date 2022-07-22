<template>
    <AppLayout>
        <div class="calendar-container">
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
            calendarOptions: {
                // These are calendar options
                plugins: [
                    dayGridPlugin,
                    timeGridPlugin,
                    listPlugin,
                    interactionPlugin,
                ],
                initialView: "dayGridMonth",
                dateClick: this.handleDateClick,
            },
        };
    },

    methods: {
        handleDateClick: function (arg) {
            alert("date click! " + arg.dateStr);
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
