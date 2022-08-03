<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddtlResourcesController extends Controller
{
    //Additional Resources View
    public function admin_index() {
        return view('marketing-admin.additional-resources');
    }

    //Additional Resources View
    public function index() {
        return view('additional-resources');
    }
}
