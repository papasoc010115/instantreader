<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table = 'consultation';

    use HasFactory;

    protected $fillable = [
        'page_title', 
        'page_desc', 
        'page_keywords', 
        'page_author',
        'sect1_heading',
        'sect1_para1',
        'sect1_image1',
        'sect1_para2',
        'sect1_image2',
        'sect2_heading',
        'sect2_para',
    ];
}
