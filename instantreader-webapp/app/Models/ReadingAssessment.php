<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingAssessment extends Model
{
    protected $table = 'reading_assessment';

    use HasFactory;

    protected $fillable = ['page_title', 'page_desc', 'page_keywords', 'page_author'];
}
