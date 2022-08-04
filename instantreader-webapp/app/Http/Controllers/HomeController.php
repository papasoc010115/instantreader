<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //Home Admin View
    public function admin_index() {
        $home = Home::first();
        return view('marketing-admin.home', [ 'home' => $home ]);
    }

    //Update Metdata
    public function update_home_page_title() {
        Home::first()->update(['page_title' => request('page-title')]);
        return redirect()->route("marketing-admin.home");
    }

    public function update_home_page_desc() {
        Home::first()->update(['page_desc' => request('page-desc')]);
        return redirect()->route("marketing-admin.home");
    }

    public function update_home_page_keywords() {
        Home::first()->update(['page_keywords' => request('page-keywords')]);
        return redirect()->route("marketing-admin.home");
    }

    public function update_home_page_author() {
        Home::first()->update(['page_author' => request('page-author')]);
        return redirect()->route("marketing-admin.home");
    }

    //Home View
    public function index() {
        $home = Home::first();
        return view('home', [ 'home' => $home ]);
    }
}
