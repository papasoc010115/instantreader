<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{    
    protected $table = 'testimonials';

    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title', 
        'page_desc', 
        'page_keywords', 
        'page_author',
        
        // Section 1: Parental Concerns
        'sect1_heading',
        'sect1_para1',
        'sect1_para2',
        'sect1_para3',
        'sect1_para4',
        'sect1_image1',
        'sect1_image2',
        'sect1_image3',
        'sect1_image4',

        // Section 2: Parental Goals
        'sect2_heading',
        'sect2_para1',
        'sect2_para2',
        'sect2_para3',
        'sect2_para4',
        'sect2_image1',
        'sect2_image2',
        'sect2_image3',
        'sect2_image4',

        // Section 3: Testimonials Gallery
        'sect3_heading',
        'sect3_name1',
        'sect3_para1',
        'sect3_name2',
        'sect3_para2',
        'sect3_name3',
        'sect3_para3',
        'sect3_name4',
        'sect3_para4',
        'sect3_image1',
        'sect3_image2',
        'sect3_image3',
        'sect3_image4',
        'sect3_images',
    ];
}
