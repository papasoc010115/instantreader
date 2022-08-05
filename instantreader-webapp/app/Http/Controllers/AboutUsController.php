<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('marketing-admin.about-us.founder');
    }

    //Founder and Developer View
    public function founder_index() {
        return view('about-us.founder');
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

        return view('marketing-admin.about-us.testimonials');
    }

    //Testimonials View
    public function testimonials_index() {
        return view('about-us.testimonials');
    }
}
