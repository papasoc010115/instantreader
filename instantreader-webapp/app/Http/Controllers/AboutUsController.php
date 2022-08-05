<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    //Founder and Developer Admin View
    public function founder_admin_index() {
        //get necessary data from table
        $founder_data = AboutUs::select(
            'founder_page_title', 'founder_page_desc', 'founder_page_keywords', 'founder_page_author',
            'founder_teacher_vicki_title', 'founder_teacher_vicki_para', 'founder_teacher_vicki_image',
            'founder_ir_history_title', 'founder_ir_history_para1', 'founder_ir_history_para2', 
            'founder_ir_history_image1', 'founder_ir_history_image2', 'founder_ir_history_video',
            'founder_ir_vision_title', 'founder_ir_vision_para', 'founder_ir_vision_image', 
            'founder_ir_mission_title', 'founder_ir_mission_para', 'founder_ir_mission_image',
            'founder_virac_para1', 'founder_virac_para2', 'founder_virac_video'
        )->first();

        return view('marketing-admin.about-us.founder', ['founder_data' => $founder_data]);
    }

    //Founder and Developer View
    public function founder_index() {
        //get necessary data from table
        $founder_data = AboutUs::select(
            'founder_page_title', 'founder_page_desc', 'founder_page_keywords', 'founder_page_author',
            'founder_teacher_vicki_title', 'founder_teacher_vicki_para', 'founder_teacher_vicki_image',
            'founder_ir_history_title', 'founder_ir_history_para1', 'founder_ir_history_para2', 
            'founder_ir_history_image1', 'founder_ir_history_image2', 'founder_ir_history_video',
            'founder_ir_vision_title', 'founder_ir_vision_para', 'founder_ir_vision_image', 
            'founder_ir_mission_title', 'founder_ir_mission_para', 'founder_ir_mission_image',
            'founder_virac_para1', 'founder_virac_para2', 'founder_virac_video'
        )->first();

        return view('about-us.founder', ['founder_data' => $founder_data]);
    }

    public function update_founder_sect1_image() {
        AboutUs::first()->update(['founder_teacher_vicki_image' => "/marketing-site/assets/img/" . request('founder-teacher-vicki-image')]);
        return redirect()->route("marketing-admin.about-us.founder");
    }

    public function update_founder_sect2_image1() {
        AboutUs::first()->update(['founder_ir_history_image1' => "/marketing-site/assets/img/" . request('founder-ir-history-image1')]);
        return redirect()->route("marketing-admin.about-us.founder");
    }

    public function update_founder_sect2_image2() {
        AboutUs::first()->update(['founder_ir_history_image2' => "/marketing-site/assets/img/" . request('founder-ir-history-image2')]);
        return redirect()->route("marketing-admin.about-us.founder");
    }

    public function update_founder_sect3_image() {
        AboutUs::first()->update(['founder_ir_vision_image' => "/marketing-site/assets/img/" . request('founder-ir-vision-image')]);
        return redirect()->route("marketing-admin.about-us.founder");
    }

    public function update_founder_sect4_image() {
        AboutUs::first()->update(['founder_ir_mission_image' => "/marketing-site/assets/img/" . request('founder-ir-mission-image')]);
        return redirect()->route("marketing-admin.about-us.founder");
    }

    //Testimonials Admin View
    public function testimonials_admin_index() {
        //get necessary data from table
        $testimonials_data = AboutUs::select(
            'testimonials_page_title', 'testimonials_page_desc', 'testimonials_page_keywords', 'testimonials_page_author',
            'parental_concerns_para1', 'parental_concerns_para2', 'parental_concerns_para3', 'parental_concerns_para4',
            'parental_concerns_image1', 'parental_concerns_image2', 'parental_concerns_image3', 'parental_concerns_image4',
            'parental_goals_para1', 'parental_goals_para2', 'parental_goals_para3', 'parental_goals_para4', 
            'parental_goals_image1', 'parental_goals_image2', 'parental_goals_image3', 'parental_goals_image4',
            'testimonials_para1', 'testimonials_para2', 'testimonials_para3', 'testimonials_para4'
        )->first();

        return view('marketing-admin.about-us.testimonials', ['testimonials_data' => $testimonials_data]);
    }

    //Testimonials View
    public function testimonials_index() {
        //get necessary data from table
        $testimonials_data = AboutUs::select(
            'testimonials_page_title', 'testimonials_page_desc', 'testimonials_page_keywords', 'testimonials_page_author',
            'parental_concerns_para1', 'parental_concerns_para2', 'parental_concerns_para3', 'parental_concerns_para4',
            'parental_concerns_image1', 'parental_concerns_image2', 'parental_concerns_image3', 'parental_concerns_image4',
            'parental_goals_para1', 'parental_goals_para2', 'parental_goals_para3', 'parental_goals_para4', 
            'parental_goals_image1', 'parental_goals_image2', 'parental_goals_image3', 'parental_goals_image4',
            'testimonials_para1', 'testimonials_para2', 'testimonials_para3', 'testimonials_para4'
        )->first();

        return view('about-us.testimonials', ['testimonials_data' => $testimonials_data]);
    }

    public function update_testimonials_sect1_image1() {
        AboutUs::first()->update(['parental_concerns_image1' => "/marketing-site/assets/img/" . request('sect1-image1')]);
        return redirect()->route("marketing-admin.about-us.testimonials");
    }

    public function update_testimonials_sect1_image2() {
        AboutUs::first()->update(['parental_concerns_image2' => "/marketing-site/assets/img/" . request('sect1-image2')]);
        return redirect()->route("marketing-admin.about-us.testimonials");
    }

    public function update_testimonials_sect1_image3() {
        AboutUs::first()->update(['parental_concerns_image3' => "/marketing-site/assets/img/" . request('sect1-image3')]);
        return redirect()->route("marketing-admin.about-us.testimonials");
    }

    public function update_testimonials_sect1_image4() {
        AboutUs::first()->update(['parental_concerns_image4' => "/marketing-site/assets/img/" . request('sect1-image4')]);
        return redirect()->route("marketing-admin.about-us.testimonials");
    }

    public function update_testimonials_sect2_image1() {
        AboutUs::first()->update(['parental_goals_image1' => "/marketing-site/assets/img/" . request('sect2-image1')]);
        return redirect()->route("marketing-admin.about-us.testimonials");
    }

    public function update_testimonials_sect2_image2() {
        AboutUs::first()->update(['parental_goals_image2' => "/marketing-site/assets/img/" . request('sect2-image2')]);
        return redirect()->route("marketing-admin.about-us.testimonials");
    }

    public function update_testimonials_sect2_image3() {
        AboutUs::first()->update(['parental_goals_image3' => "/marketing-site/assets/img/" . request('sect2-image3')]);
        return redirect()->route("marketing-admin.about-us.testimonials");
    }

    public function update_testimonials_sect2_image4() {
        AboutUs::first()->update(['parental_goals_image4' => "/marketing-site/assets/img/" . request('sect2-image4')]);
        return redirect()->route("marketing-admin.about-us.testimonials");
    }
}
