<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnMoreController extends Controller
{
    //Reading Assessment Admin View
    // public function reading_assessment_index() {
    //     return view('marketing-admin.learn-more.reading-assessment');
    // }
    
    //Reading Assessment View
    public function reading_assessment_index() {
        return view('learn-more.reading-assessment');
    }

    //Reading Programs Admin View
    // public function reading_program_index() {
    //     return view('marketing-admin.learn-more.program-overview');
    // }

    //Reading Programs View
    public function reading_program_index() {
        return view('learn-more.program-overview');
    }

    //FAQ Admin View
    // public function faq_index() {
    //     return view('marketing-admin.learn-more.faq');
    // }

    //FAQ View
    public function faq_index() {
        return view('learn-more.faq');
    }

    //IR Kids Club Admin View
    // public function kids_club_index() {
    //     return view('marketing-admin.learn-more.kids-club');
    // }

    //IR Kids Club View
    public function kids_club_index() {
        return view('learn-more.kids-club');
    }
}
