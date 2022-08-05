<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdditionalResource;

class AdditionalResourceController extends Controller
{
    //Additional Resources View
    public function admin_index() {
        $data = AdditionalResource::first();
        return view('marketing-admin.additional-resources', ['data' => $data]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        AdditionalResource::first()->update([$name => $value]);
    }

    //Additional Resources View
    public function index() {
        $data = AdditionalResource::first();
        return view('additional-resources', ['data' => $data]);
    }
}
