<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventSchedule;

class BookingController extends Controller
{
    // Store new schedules generated
    public function store_schedules(Request $req) {
        foreach (json_decode($req->data) as $schedule) {
            $newSchedule = new EventSchedule();

            $newSchedule->type = $schedule->event_name;
            $newSchedule->date = $schedule->date;
            $newSchedule->start_time = $schedule->start_time;
            $newSchedule->end_time = $schedule->end_time;
            $newSchedule->slots = $schedule->slots;

            $newSchedule->save();
        }
    }
}
