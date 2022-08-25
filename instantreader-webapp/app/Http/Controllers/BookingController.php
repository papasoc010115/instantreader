<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventSchedule;

class BookingController extends Controller
{
    // Store new schedules generated
    public function store_schedules(Request $req) {
        $temp = "";
        $tempIsUpdated = 0;
        foreach (json_decode($req->data) as $schedule) {
            // find schedule in table
            $target = EventSchedule::where([
                'type' => $schedule->event_name, 
                'date' => $schedule->date, 
                'start_time' => $schedule->start_time, 
                'end_time' => $schedule->end_time
            ])->get();
            
            if ($tempIsUpdated === 0){                
                $temp = $schedule->event_name;
                $tempIsUpdated = 1;
            }
            
            if (count($target) === 0) {
                // not yet existing, so save new record
                $newSchedule = new EventSchedule();
                
                $newSchedule->type = $schedule->event_name;
                $newSchedule->date = $schedule->date;
                $newSchedule->start_time = $schedule->start_time;
                $newSchedule->end_time = $schedule->end_time;
                $newSchedule->slots = $schedule->slots;

                $newSchedule->save();
            } else {
                // existing, so update slots
                $target[0]->update(['slots' => $target[0]->slots + (int)$schedule->slots]);     
            }
        }
        app('App\Http\Controllers\LogController')->store("Updated ". $temp ." table");
    }

    //Delete existing schedule
    public function delete_schedule(Request $req) {
        $event = EventSchedule::where('id', $req->id)->delete();
        app('App\Http\Controllers\LogController')->store("Deleted one ". $event->type ." event");
    }

}
