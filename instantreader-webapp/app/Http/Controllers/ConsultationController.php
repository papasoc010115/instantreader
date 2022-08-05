<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    //Book Free Online Consultation Admin View
    public function admin_index() {
        //get necessary data from table
        $data = Consultation::first();

        return view('marketing-admin.contact-us.consultation', [ 'data' => $data ]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        Consultation::first()->update([$name => $value]);
    }
    
    //Book Free Online Consultation View
    public function index() {
        //get necessary data from table
        $data = Consultation::first();
        return view('contact-us.book-consultation', [ 'data' => $data ]);
    }

}
