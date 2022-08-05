<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //Home Admin View
    public function admin_index() {
        $data = Home::first();
        return view('marketing-admin.home', [ 'data' => $data ]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        Home::first()->update([$name => $value]);
    }

    //Home View
    public function index() {
        $data = Home::first();
        return view('home', [ 'data' => $data ]);
    }
}
