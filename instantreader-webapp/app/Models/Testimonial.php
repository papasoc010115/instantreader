<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{    
    protected $table = 'testimonials';

    use HasFactory;

    protected $fillable = ['page_title', 'page_desc', 'page_keywords', 'page_author'];
}
