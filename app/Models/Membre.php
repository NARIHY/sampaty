<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Membre extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenon',
        'surnon',
        'andraikitra',
        'birthday',
        'addresse',
        'sampana',
        'age'
    ];

    public function sampana(): BelongsToMany
    {
        return $this->belongsTomany(Sampana::class);
    }
    public function andraikitra(): BelongsToMany
    {
        return $this->belongsTomany(Andraikitra::class);
    }
}
