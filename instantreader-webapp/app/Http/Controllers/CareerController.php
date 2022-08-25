<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    //Start a Career With Us Admin View
    public function admin_index() {
        //get necessary data from table
        $data = Career::first();

        return view('marketing-admin.contact-us.career', ['data' => $data]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        Career::first()->update([$name => $value]);
        app('App\Http\Controllers\LogController')->store("Updated Career page's ".$name);
    }

    // Upload Single Media File
    public function store_media_single(Request $req) {
        // getting the current page to be updated
        $uri = explode('/',$req->getRequestUri());
        $page = $uri[count($uri)-2];

        foreach ($_FILES as $field_name => $val) {
            // getting the field name of the input field
            $name = $field_name;

            // getting the file based on the field name
            $file = $req->file($name);
            // renaming the file and saving it to the specified path
            $filename = $page.'_'.$name.'.'.explode('/',$file->getMimeType())[1];
            $path = $file->storeAs('public/marketing-site/assets/img/', $filename);

            // getting the path of the media
            $value = 'storage/marketing-site/assets/img/'.$filename;
        }

        // update the database
        Career::first()->update([$name => $value]);
        app('App\Http\Controllers\LogController')->store("Updated Career page's ".$name);
        return redirect()->route("marketing-admin.contact-us.career")->with('upload_media_success', 'Successfully Updated!');
    }

    //Start a Career With Us View
    public function index() {
        //get necessary data from table
        $data = Career::first();        
        return view('contact-us.application', ['data' => $data]);
    }
}
