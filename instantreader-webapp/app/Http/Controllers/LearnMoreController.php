<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnMoreController extends Controller
{
    //Reading Assessment Admin View
    public function reading_assessment_admin_index() {
        return view('marketing-admin.learn-more.reading-assessment');
    }
    
    //Reading Assessment View
    public function reading_assessment_index() {
        return view('learn-more.reading-assessment');
    }

    //Reading Programs Admin View
    public function reading_programs_admin_index() {
        return view('marketing-admin.learn-more.reading-programs');
    }

    //Reading Programs View
    public function reading_programs_index() {
        return view('learn-more.program-overview');
    }

    //IR Kids Club Admin View
    public function kids_club_admin_index() {
        return view('marketing-admin.learn-more.kids-club');
    }

    //IR Kids Club View
    public function kids_club_index() {
        return view('learn-more.kids-club');
    }

    //FAQ Admin View
    public function faq_admin_index() {
        return view('marketing-admin.learn-more.faq');
    }

    //FAQ View
    public function faq_index() {
        return view('learn-more.faq');
    }
}
