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
        // 'sect1_heading',
        // 'sect1_para',
        'sect1_image',

        // // Section 2: Highlight Video
        // 'sect2_heading1',
        // 'sect2_heading2',
        // 'sect2_para',
        'sect2_video',

        // // Section 3: Live Parent Orientation
        // 'sect3_heading',
        // 'sect3_para',
        // 'sect3_images',

        // // Section 4: Teacher Vicki & Likha
        // 'sect4_heading',
        // 'sect4_para1',
        // 'sect4_image1',
        // 'sect4_para2',
        // 'sect4_image2',

        // // Section 5: Area Jurisdictions
        // 'sect5_heading',
        // 'sect5_para',

        // // Section 6: Testimonies
        // 'sect6_heading',
        // 'sect6_para',
        // 'sect6_images',

        // // Section 7: IR Kids Club
        // 'sect7_heading',
        // 'sect7_para',
        // 'sect7_images',

        // // Section 8: Enroll Now
        // 'sect8_heading',
        // 'sect8_para',
        // 'sect8_image',
    ];
}
