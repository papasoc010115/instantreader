<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = ['consultation_page_title', 'consultation_page_desc', 'consultation_page_keywords', 'consultation_page_author', 
    'consultation_sect1_heading', 'consultation_sect1_para1', 'consultation_sect1_image1',
    'consultation_sect1_para2', 'consultation_sect1_image2',
    'consultation_sect2_title', 'consultation_sect2_para',
    'career_page_title', 'career_page_desc', 'career_page_keywords', 'career_page_author', 
    'career_sect1_heading', 'career_sect1_title1', 'career_sect1_para1', 'career_sect1_image1',
    'career_sect1_title2', 'career_sect1_para2', 'career_sect1_image2'];
}
