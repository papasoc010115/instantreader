<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    //Book Free Online Consultation Admin View
    public function book_consultation_admin_index() {
        //get necessary data from table
        $consultation_data = ContactUs::select(
            'consultation_page_title', 'consultation_page_desc', 'consultation_page_keywords', 'consultation_page_author', 
            'consultation_sect1_title1', 'consultation_sect1_para1', 'consultation_sect1_image1',
            'consultation_sect1_title2', 'consultation_sect1_para2', 'consultation_sect1_image2',
            'consultation_sect2_title', 'consultation_sect2_para'
        )->first();

        return view('marketing-admin.contact-us.consultation', ['consultation_data' => $consultation_data]);
    }
    
    //Book Free Online Consultation View
    public function book_consultation_index() {
        //get necessary data from table
        $consultation_data = ContactUs::select(
            'consultation_page_title', 'consultation_page_desc', 'consultation_page_keywords', 'consultation_page_author', 
            'consultation_sect1_title1', 'consultation_sect1_para1', 'consultation_sect1_image1',
            'consultation_sect1_title2', 'consultation_sect1_para2', 'consultation_sect1_image2',
            'consultation_sect2_title', 'consultation_sect2_para'
        )->first();

        return view('contact-us.book-consultation', ['consultation_data' => $consultation_data]);
    }

    public function update_consultation_page_title() {
        ContactUs::first()->update(['consultation_page_title' => request('page-title')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_page_desc() {
        ContactUs::first()->update(['consultation_page_desc' => request('page-desc')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_page_keywords() {
        ContactUs::first()->update(['consultation_page_keywords' => request('page-keywords')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_page_author() {
        ContactUs::first()->update(['consultation_page_author' => request('page-author')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_sect1_title1() {
        ContactUs::first()->update(['consultation_sect1_title1' => request('sect1-title1')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_sect1_para1() {
        ContactUs::first()->update(['consultation_sect1_para1' => request('sect1-paragraph1')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_sect1_title2() {
        ContactUs::first()->update(['consultation_sect1_title2' => request('sect1-title2')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_sect1_para2() {
        ContactUs::first()->update(['consultation_sect1_para2' => request('sect1-paragraph2')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_sect2_title() {
        ContactUs::first()->update(['consultation_sect2_title' => request('sect2-title')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    public function update_consultation_sect2_para() {
        ContactUs::first()->update(['consultation_sect2_para' => request('sect2-paragraph')]);
        return redirect()->route("marketing-admin.contact-us.consultation");
    }

    //Start a Career With Us Admin View
    public function career_admin_index() {
        //get necessary data from table
        $career_data = ContactUs::select(
            'career_page_title', 'career_page_desc', 'career_page_keywords', 'career_page_author', 
            'career_sect1_title1', 'career_sect1_para1', 'career_sect1_image1',
            'career_sect1_title2', 'career_sect1_para2', 'career_sect1_image2'
        )->first();

        return view('marketing-admin.contact-us.career', ['career_data' => $career_data]);
    }

    //Start a Career With Us View
    public function career_index() {
        //get necessary data from table
        $career_data = ContactUs::select(
            'career_page_title', 'career_page_desc', 'career_page_keywords', 'career_page_author', 
            'career_sect1_title1', 'career_sect1_para1', 'career_sect1_image1',
            'career_sect1_title2', 'career_sect1_para2', 'career_sect1_image2'
        )->first();
        
        return view('contact-us.application', ['career_data' => $career_data]);
    }

    public function update_career_page_title() {
        ContactUs::first()->update(['career_page_title' => request('page-title')]);
        return redirect()->route("marketing-admin.contact-us.career");
    }

    public function update_career_page_desc() {
        ContactUs::first()->update(['career_page_desc' => request('page-desc')]);
        return redirect()->route("marketing-admin.contact-us.career");
    }

    public function update_career_page_keywords() {
        ContactUs::first()->update(['career_page_keywords' => request('page-keywords')]);
        return redirect()->route("marketing-admin.contact-us.career");
    }

    public function update_career_page_author() {
        ContactUs::first()->update(['career_page_author' => request('page-author')]);
        return redirect()->route("marketing-admin.contact-us.career");
    }
}
