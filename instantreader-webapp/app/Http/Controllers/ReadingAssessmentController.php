<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingAssessment;
use App\Models\EventSchedule;

class ReadingAssessmentController extends Controller
{
    // Reading Assessment Admin View
    public function admin_index() {
        $data = ReadingAssessment::first();
        $assessment_events = EventSchedule::get()->where('type', 'Assessment')->sortBy('date');

        // get each unique date
        $unique_dates = [];
        $curr_date = "";
        foreach($assessment_events as $event){
            if ($curr_date != $event->date){
                array_push($unique_dates, $event->date);
                $curr_date = $event->date;
            }
        }

        // get all slots for each unique date
        $final_events = [];
        $date_slots = [];
        $total_slots = 0;
        foreach($unique_dates as $date){
            foreach ($assessment_events as $event){
                if ($date == $event->date){
                    array_push($date_slots, $event);
                    $total_slots = $total_slots + $event->slots;
                }
            }
            array_push($final_events, [$date, $date_slots, $total_slots]);
            $date_slots = [];
            $total_slots = 0;
        }

        // group array into chunks of 4
        $final_events = array_chunk($final_events, 4);

        return view('marketing-admin.learn-more.reading-assessment', [ 'data' => $data, 'events' => $final_events ]);
    }

    // Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        ReadingAssessment::first()->update([$name => $value]);
    }

    // Upload Single Media File
    public function store_media_single(Request $req) {
        // getting the current page to be updated
        $uri = explode('/',$req->getRequestUri());
        $page = $uri[count($uri)-2];

        foreach ($_FILES as $field_name => $val) {
            // getting the field name of the input field
            $name = $field_name;

            // getting the file based on the field name
            $file = $req->file($name);
            // renaming the file and saving it to the specified path
            $filename = $page.'_'.$name.'.'.explode('/',$file->getMimeType())[1];
            $path = $file->storeAs('public/marketing-site/assets/img/', $filename);

            // getting the path of the media
            $value = 'storage/marketing-site/assets/img/'.$filename;
        }

        // update the database
        ReadingAssessment::first()->update([$name => $value]);
        return redirect()->route("marketing-admin.learn-more.reading-assessment")->with('upload_media_success', 'Successfully Updated!');
    }
    
    // Reading Assessment View
    public function index() {
        $data = ReadingAssessment::first();
        $assessment_events = EventSchedule::get()->where('type', 'Assessment')->sortBy('date');

        // get each unique date
        $unique_dates = [];
        $curr_date = "";
        foreach($assessment_events as $event){
            if ($curr_date != $event->date){
                array_push($unique_dates, $event->date);
                $curr_date = $event->date;
            }
        }

        // get all slots for each unique date
        $final_events = [];
        $date_slots = [];
        $total_slots = 0;
        foreach($unique_dates as $date){
            foreach ($assessment_events as $event){
                if ($date == $event->date){
                    array_push($date_slots, $event);
                    $total_slots = $total_slots + $event->slots;
                }
            }
            array_push($final_events, [$date, $date_slots, $total_slots]);
            $date_slots = [];
            $total_slots = 0;
        }

        // group array into chunks of 4
        $final_events = array_chunk($final_events, 4);

        return view('learn-more.reading-assessment', [ 'data' => $data, 'events' => $final_events ]);
    }
}
