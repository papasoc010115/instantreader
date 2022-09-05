<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingAssessment extends Model
{
    protected $table = 'reading_assessment';

    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title',
        'page_desc',
        'page_keywords',
        'page_author',

        //Section 1: About the Online Reading Assessment
        'sect1_subheading',
        'sect1_heading',
        'sect1_para',
        'sect1_image',

        //Section 2: Calendar
        'sect2_heading',
        'sect2_para',
    ];
}
