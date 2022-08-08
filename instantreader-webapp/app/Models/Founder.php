<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    protected $table = 'founder';

    use HasFactory;

    protected $fillable = [
        // Meta Data
        'page_title', 
        'page_desc', 
        'page_keywords', 
        'page_author',

        // Section 1: Teacher Vicki
        'teacher_vicki_title',
        'teacher_vicki_para',
        'teacher_vicki_image',

        // Section 2: IR History
        'ir_history_title',
        'ir_history_para1',
        'ir_history_para2',
        'ir_history_image1',
        'ir_history_image2',
        'ir_history_video',

        // Section 3: Vision
        'ir_vision_title',
        'ir_vision_para',
        'ir_vision_image',

        // Section 4: Mission
        'ir_mission_title',
        'ir_mission_para',
        'ir_mission_image',

        // Section 5: Project VIRAC
        'proj_virac_para1',
        'proj_virac_para2',
        'proj_virac_video',
        'proj_virac_images'
    ];
}
