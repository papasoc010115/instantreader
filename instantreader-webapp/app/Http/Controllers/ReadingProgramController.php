<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingProgram;

class ReadingProgramController extends Controller
{
    //Reading Programs Admin View
    public function admin_index() {
        $data = ReadingProgram::first();
        return view('marketing-admin.learn-more.reading-programs', ['data' => $data]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        ReadingProgram::first()->update([$name => $value]);
    }

    //Reading Programs View
    public function index() {
        $data = ReadingProgram::first();
        return view('learn-more.program-overview', ['data' => $data]);
    }
}
