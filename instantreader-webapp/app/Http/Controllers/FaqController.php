<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    //FAQ Admin View
    public function admin_index() {
        $data = Faq::first();
        return view('marketing-admin.learn-more.faq', [ 'data' => $data ]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        Faq::first()->update([$name => $value]);
    }

    //FAQ View
    public function index() {
        $data = Faq::first();
        return view('learn-more.faq', [ 'data' => $data ]);
    }
}
