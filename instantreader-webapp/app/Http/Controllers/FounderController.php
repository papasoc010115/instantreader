<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Founder;

class FounderController extends Controller
{
    //Founder and Developer Admin View
    public function admin_index() {
        $data = Founder::first();
        return view('marketing-admin.about-us.founder', [ 'data' => $data ]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        Founder::first()->update([$name => $value]);
    }

    //Founder and Developer View
    public function index() {
        $data = Founder::first();
        return view('about-us.founder', [ 'data' => $data ]);
    }
}
