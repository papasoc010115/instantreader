<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingProgram extends Model
{
    protected $table = 'reading_programs';

    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title',
        'page_desc',
        'page_keywords',
        'page_author',

        // Section 1: All Programs
        'sect1_para1',
        'sect1_para2',
        'sect1_para3',
        'sect1_para4',
        'sect1_image1',
        'sect1_image2',
        'sect1_image3',
        'sect1_image4',

        // Section 2: Basic Program
        'sect2_heading',
        'sect2_para1',
        'sect2_para2',
        'sect2_para3',
        'sect2_image1',
        'sect2_image2',
        'sect2_image3',

        // Section 3: Advanced Program
        'sect3_heading',
        'sect3_para1',
        'sect3_para2',
        'sect3_para3',
        'sect3_image1',
        'sect3_image2',
        'sect3_image3',

        // Section 4: Mastery Program
        'sect4_heading',
        'sect4_para1',
        'sect4_para2',
        'sect4_para3',
        'sect4_image1',
        'sect4_image2',
        'sect4_image3',

        // Section 5: Compass Program
        'sect5_heading',
        'sect5_para1',
        'sect5_para2',
        'sect5_para3',
        'sect5_para4',
        'sect5_para5',
        'sect5_para6',
        'sect5_image1',
        'sect5_image2',
        'sect5_image3',
        'sect5_image4',
        'sect5_image5',
        'sect5_video',
    ];
}
