<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deck extends Model
{
    use HasFactory;

    protected $table = 'decks';

    protected $fillable = [
        'name',
        'ownerId',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'ownerId');
    }
}
