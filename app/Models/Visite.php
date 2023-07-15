<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    protected $fillable = [
        'visitor_id',
        'ip_address',
        'user_agent',
        'visited_at'
    ];
}
