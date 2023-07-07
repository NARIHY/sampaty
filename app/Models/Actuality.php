<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sampana;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actuality extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'picture',
        'picture_2',
        'picture_3',
        'sampana'
        
    ];
    public function sampana(): BelongsToMany
    {
        return $this->belongsToMany(Sampana::class);
    }
}
