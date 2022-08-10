<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalResource extends Model
{
    protected $table = 'additional_resources';

    use HasFactory;

    protected $fillable = [
        // Metadata
        'page_title',
        'page_desc',
        'page_keywords',
        'page_author'
    ];
}
