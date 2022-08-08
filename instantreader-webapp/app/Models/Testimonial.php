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
        'parental_concerns_title',
        'parental_concerns_para1',
        'parental_concerns_para2',
        'parental_concerns_para3',
        'parental_concerns_para4',
        'parental_concerns_image1',
        'parental_concerns_image2',
        'parental_concerns_image3',
        'parental_concerns_image4',

        // Section 2: Parental Goals
        'parental_goals_title',
        'parental_goals_para1',
        'parental_goals_para2',
        'parental_goals_para3',
        'parental_goals_para4',
        'parental_goals_image1',
        'parental_goals_image2',
        'parental_goals_image3',
        'parental_goals_image4',

        // Section 3: Testimonials Gallery
        'testimonials_title',
        'testimonials_para1',
        'testimonials_para2',
        'testimonials_para3',
        'testimonials_para4',
        'testimonials_images',
    ];
}
