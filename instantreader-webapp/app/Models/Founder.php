<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    protected $table = 'founder';

    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title', 
        'page_desc', 
        'page_keywords', 
        'page_author',

        // Section 1: Teacher Vicki
        'sect1_subheading',
        'sect1_heading',
        'sect1_para',
        'sect1_image',
        'sect1_fb',
        'sect1_twt',
        'sect1_ig',

        // Section 2: IR History
        'sect2_heading',
        'sect2_para1',
        'sect2_para2',
        'sect2_image1',
        'sect2_image2',
        'sect2_video',

        // Section 3: Vision
        'sect3_heading',
        'sect3_para',
        'sect3_image',

        // Section 4: Mission
        'sect4_heading',
        'sect4_para',
        'sect4_image',

        // Section 5: Project VIRAC
        'sect5_heading',
        'sect5_para1',
        'sect5_para2',
        'sect5_video',
        'sect5_image1',
        'sect5_image2',
        'sect5_image3',
        'sect5_image4',
        'sect5_image5',
    ];
}
