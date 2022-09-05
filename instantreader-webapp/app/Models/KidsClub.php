<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KidsClub extends Model
{
    protected $table = 'kids_club';

    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title',
        'page_desc',
        'page_keywords',
        'page_author',

        // Section 1: Welcome Screen
        'sect1_heading',
        'sect1_para',
        'sect1_image',

        // Section 2: About Instant Readrer Kids Club
        'sect2_heading',
        'sect2_para1',
        'sect2_para2',
        'sect2_image1',
        'sect2_image2',
        'sect2_image3',
        'sect2_video',

        // Section 3: Coming Soon/Register Now
        'sect3_heading',
        'sect3_para',
        'sect3_image',
    ];
}
