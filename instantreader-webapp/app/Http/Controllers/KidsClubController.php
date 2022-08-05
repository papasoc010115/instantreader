<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KidsClub;

class KidsClubController extends Controller
{
    //IR Kids Club Admin View
    public function admin_index() {
        $data = KidsClub::first();
        return view('marketing-admin.learn-more.kids-club', ['data' => $data]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        KidsClub::first()->update([$name => $value]);
    }

    //IR Kids Club View
    public function index() {
        $data = KidsClub::first();
        return view('learn-more.kids-club', ['data' => $data]);
    }
}
