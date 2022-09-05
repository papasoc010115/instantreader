<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';

    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title',
        'page_desc', 
        'page_keywords', 
        'page_author',

        // Section 1: Job Description & Requirements
        'sect1_heading',
        'sect1_title1',
        'sect1_para1',
        'sect1_image1',
        'sect1_title2',
        'sect1_para2',
        'sect1_image2',
    ];
}
