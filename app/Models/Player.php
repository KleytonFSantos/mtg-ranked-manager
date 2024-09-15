<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = [
        'name',
        'points',
        'wins',
        'losses',

    ];
    public function deck(): HasMany
    {
        return $this->hasMany(Deck::class, 'ownerId');
    }
}
