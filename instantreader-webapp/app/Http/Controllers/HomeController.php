<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Home;
use App\Models\IndividualTestimonial;

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
        Home::first()->update([$name => $value]);
        return redirect()->route("marketing-admin.home")->with('upload_media_success', 'Successfully Updated!');
    }

    // Upload Multiple Media File
    public function store_media_multiple(Request $req) {
        // getting the current page to be updated
        $uri = explode('/',$req->getRequestUri());
        $page = $uri[count($uri)-2];
        $file_num = 0;

        foreach ($_FILES as $field_name => $val) {
            // getting the file based on the field name
            $name = $field_name;
            
            // getting the file list based on the field name
            $file_list = $req->file($name);
            
            // Verifiy Number of Files
            // Section 6 : Testimonies (3-N)
            if ($page == 'home' && $name == 'sect6_images' && count($file_list) < 3) {
                return redirect()->route("marketing-admin.home")->with('upload_media_fail', 'Update Failed. Try checking the number of files.');
            }
            // Section 7 : IR Kids Club (3-N)
            if ($page == 'home' && $name == 'sect7_images' && count($file_list) < 3) {
                return redirect()->route("marketing-admin.home")->with('upload_media_fail', 'Update Failed. Try checking the number of files.');
            }

            // get the path of the directory
            $value = 'public/marketing-site/assets/img/'.$page.'_'.$name.'/';

            // delete old files in the directory
            $delete_files = Storage::allFiles('public/marketing-site/assets/img/'.$name);
            Storage::delete($delete_files);

            // save new files in the directory
            foreach ($file_list as $file) {
                // renaming the file and saving it to the specified path
                $filename = $page.'_'.$name.'_'.$file_num.'.'.explode('/',$file->getMimeType())[1];
                $path = $file->storeAs('public/marketing-site/assets/img/'.$page.'_'.$name.'/', $filename);
                
                // updating the file number
                $file_num = $file_num + 1;
            }
        }

        // update the database
        Home::first()->update([$name => $value]);
        return redirect()->route("marketing-admin.home")->with('upload_media_success', 'Successfully Updated!');
    }

    //Home View
    public function index() {
        $data = Home::first();
        $testimonials = IndividualTestimonial::inRandomOrder()->limit(8)->get();
        return view('home', [ 'data' => $data, 'testimonials' => $testimonials ]);
    }
}
