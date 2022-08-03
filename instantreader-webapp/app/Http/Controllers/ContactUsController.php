<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    //Book Free Online Consultation Admin View
    public function book_consultation_admin_index() {
        return view('marketing-admin.contact-us.consultation');
    }
    
    //Book Free Online Consultation View
    public function book_consultation_index() {
        return view('contact-us.book-consultation');
    }

    //Start a Career With Us Admin View
    public function application_admin_index() {
        return view('marketing-admin.contact-us.career');
    }

    //Start a Career With Us View
    public function application_index() {
        return view('contact-us.application');
    }
}
