<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAndAnswer extends Model
{
    protected $table = 'questions_and_answers';

    use HasFactory;

    protected $fillable = [
        // Data
        'question',
        'answer',
    ];
}
