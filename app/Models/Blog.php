<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Sampana;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
        'picture_2',
        'image'
    ];
    public function sampana(): BelongsToMany
    {
        return $this->belongsToMany(Sampana::class);
    }
    
}
