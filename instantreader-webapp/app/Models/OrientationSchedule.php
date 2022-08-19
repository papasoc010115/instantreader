<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrientationSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        // Online Orientation Schedule Information
        'date',
        'start_time',
        'end_time',
        'slots'
    ];
}
