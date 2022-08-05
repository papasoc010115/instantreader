<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = ['founder_page_title', 'founder_page_desc', 'founder_page_keywords', 'founder_page_author',
    'founder_teacher_vicki_title', 'founder_teacher_vicki_para', 'founder_teacher_vicki_image',
    'founder_ir_history_title', 'founder_ir_history_para1', 'founder_ir_history_para2', 
    'founder_ir_history_image1', 'founder_ir_history_image2', 'founder_ir_history_video',
    'founder_ir_vision_title', 'founder_ir_vision_para', 'founder_ir_vision_image', 
    'founder_ir_mission_title', 'founder_ir_mission_para', 'founder_ir_mission_image',
    'founder_virac_para1', 'founder_virac_para2', 'founder_virac_video', 'founder_virac_image1',
    'founder_virac_image2', 'founder_virac_image3', 'founder_virac_image4', 'founder_virac_image5',
    'testimonials_page_title', 'testimonials_page_desc', 'testimonials_page_keywords', 'testimonials_page_author',
    'parental_concerns_para1', 'parental_concerns_para2', 'parental_concerns_para3', 'parental_concerns_para4',
    'parental_concerns_image1', 'parental_concerns_image2', 'parental_concerns_image3', 'parental_concerns_image4',
    'parental_goals_para1', 'parental_goals_para2', 'parental_goals_para3', 'parental_goals_para4', 
    'parental_goals_image1', 'parental_goals_image2', 'parental_goals_image3', 'parental_goals_image4',
    'testimonials_para1', 'testimonials_para2', 'testimonials_para3', 'testimonials_para4', 'testimonials_image1',
    'testimonials_image2', 'testimonials_image3', 'testimonials_image4'];
}
