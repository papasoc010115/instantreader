<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingAssessment;

class ReadingAssessmentController extends Controller
{
    //Reading Assessment Admin View
    public function admin_index() {
        $data = ReadingAssessment::first();
        return view('marketing-admin.learn-more.reading-assessment', [ 'data' => $data ]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        ReadingAssessment::first()->update([$name => $value]);
    }
    
    //Reading Assessment View
    public function index() {
        $data = ReadingAssessment::first();
        return view('learn-more.reading-assessment', [ 'data' => $data ]);
    }
}
