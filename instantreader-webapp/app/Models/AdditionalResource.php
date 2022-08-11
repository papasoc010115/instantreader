<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalResource extends Model
{
    protected $table = 'additional_resources';

    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title',
        'page_desc',
        'page_keywords',
        'page_author',

        // Section 1: Tips/Resources Selection Library
        'sect1_heading',
        'sect1_para1',
        'sect1_para2',
        'sect1_para3',
        'sect1_image1',
        'sect1_image2',
        'sect1_image3',

        // Section 2: E-books/Blogs
        'sect2_heading1',
        'sect2_heading2',
        'sect2_para',

        // Section 3: Videos
        'sect3_heading',
        'sect3_para',
        'sect3_videos',

        // Section 4: Visuals
        'sect4_heading',
        'sect4_para',
        'sect4_images',
    ];
}
