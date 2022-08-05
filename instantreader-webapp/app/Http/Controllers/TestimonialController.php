<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    //Testimonials Admin View
    public function admin_index() {
        $data = Testimonial::first();
        return view('marketing-admin.about-us.testimonials', [ 'data' => $data ]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        Testimonial::first()->update([$name => $value]);
    }

    //Testimonials View
    public function index() {
        $data = Testimonial::first();
        return view('about-us.testimonials', [ 'data' => $data ]);
    }
}
