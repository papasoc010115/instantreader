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

    // Upload Single Media File
    public function store_media_single(Request $req) {
        $uri = explode('/',$req->getRequestUri());
        $page = $uri[count($uri)-2];

        foreach ($_FILES as $field_name => $val) {
            $name = $field_name;
            
            $file = $req->file($name);
            $filename = $page.'_'.$name.'.'.explode('/',$file->getMimeType())[1];
            $path = $file->storeAs('public/marketing-site/assets/img/', $filename);

            $value = 'storage/marketing-site/assets/img/'.$filename;
        }

        Home::first()->update([$name => $value]);
        return redirect()->route("marketing-admin.home")->with('upload_media', 'Successfully Updated!');
    }

    //Home View
    public function index() {
        $data = Home::first();
        return view('home', [ 'data' => $data ]);
    }
}
