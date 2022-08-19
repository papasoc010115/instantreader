<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        // Event Schedule Information
        'type',
        'date',
        'start_time',
        'end_time',
        'slots',
    ];
}
