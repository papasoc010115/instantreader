<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';
    
    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title', 
        'page_desc', 
        'page_keywords', 
        'page_author',
    
        // Section 1: IR Welcome Screen
        'welcome_title',
        'welcome_statement',
        'welcome_image',

        // Section 2: Highlight Video
        'highlight_title1',
        'highlight_title2',
        'highlight_para',
        'highlight_video',

        // Section 3: Live Parent Orientation
        'orientation_title1',
        'orientation_title2',
        'orientation_para',
        'orientation_images',

        // Section 4: Teacher Vicki & Likha
        'vicki_likha_title',
        'vicki_para',
        'vicki_image',
        'likha_para',
        'likha_image',

        // Section 5: Area Jurisdictions
        'jurisdictions_title',
        'jurisdictions_branches',
        'jurisdictions_para',

        // Section 6: Testimonies
        'testimonies_title',
        'testimonies_para',
        'testimonies_images',

        // Section 7: IR Kids Club
        'kids_club_title',
        'kids_club_para',
        'kids_club_images',

        // Section 8: Enroll Now
        'enroll_title',
        'enroll_para',
        'enroll_image',
    ];
}
