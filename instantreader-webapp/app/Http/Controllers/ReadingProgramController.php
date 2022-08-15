<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingProgram;

class ReadingProgramController extends Controller
{
    //Reading Programs Admin View
    public function admin_index() {
        $data = ReadingProgram::first();
        return view('marketing-admin.learn-more.reading-programs', ['data' => $data]);
    }

    //Update Data
    public function update_page(Request $req) {
        $name = $req->name;
        $value = $req->value;
        ReadingProgram::first()->update([$name => $value]);
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
        ReadingProgram::first()->update([$name => $value]);
        return redirect()->route("marketing-admin.learn-more.reading-programs")->with('upload_media_success', 'Successfully Updated!');
    }

    //Reading Programs View
    public function index() {
        $data = ReadingProgram::first();
        return view('learn-more.program-overview', ['data' => $data]);
    }
}
