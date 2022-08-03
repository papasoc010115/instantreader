<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home Admin View
    public function admin_index() {
        return view('marketing-admin.home');
    }

    //Home View
    public function index() {
        return view('home');
    }
}
