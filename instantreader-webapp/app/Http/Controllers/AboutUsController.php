<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //Founder and Developer Admin View
    public function founder_admin_index() {
        return view('marketing-admin.about-us.founder');
    }

    //Founder and Developer View
    public function founder_index() {
        return view('about-us.founder');
    }

    //Testimonials Admin View
    public function testimonials_admin_index() {
        return view('marketing-admin.about-us.testimonials');
    }

    //Testimonials View
    public function testimonials_index() {
        return view('about-us.testimonials');
    }
}
