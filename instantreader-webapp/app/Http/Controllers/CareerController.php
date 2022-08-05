<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    //Start a Career With Us Admin View
    public function admin_index() {
        //get necessary data from table
        $data = Career::first();

        return view('marketing-admin.contact-us.career', ['data' => $data]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        Career::first()->update([$name => $value]);
    }

    //Start a Career With Us View
    public function index() {
        //get necessary data from table
        $data = Career::first();        
        return view('contact-us.application', ['data' => $data]);
    }
}
