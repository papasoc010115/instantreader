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
import interactionPlugin from "@fullcalendar/interaction";

export default {
    components: {
        AppLayout,
        FullCalendar,
    },
    data() {
        return {
            calendarOptions: {
                plugins: [dayGridPlugin, interactionPlugin],
                initialView: "dayGridMonth",
            },
        };
    },
};
</script>

<style>
.calendar-container {
    padding: 2rem 3rem;
}
</style>
