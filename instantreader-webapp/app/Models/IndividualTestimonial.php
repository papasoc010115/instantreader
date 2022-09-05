<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualTestimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        // Data
        'testimonial',
        'name',
        'rating',
        'image'
    ];
}
