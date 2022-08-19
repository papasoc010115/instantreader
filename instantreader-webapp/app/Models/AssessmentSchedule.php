<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        // Online Assessment Schedule Information
        'date',
        'start_time',
        'end_time',
        'slots'
    ];
}
