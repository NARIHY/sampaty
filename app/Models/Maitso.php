<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maitso extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'info',
        'image_2',
        'image_3'
    ];
}
