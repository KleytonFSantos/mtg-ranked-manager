<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matches extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillable = [
        'deck1Id',
        'deck2Id',
        'deck3Id',
        'deck4Id',
        'winnerId',
    ];

    public function deck1(): BelongsTo
    {
        return $this->belongsTo(Deck::class, 'deck1Id');
    }

    public function deck2(): BelongsTo
    {
        return $this->belongsTo(Deck::class, 'deck2Id');
    }

    public function deck3(): BelongsTo
    {
        return $this->belongsTo(Deck::class, 'deck3Id');
    }

    public function deck4(): BelongsTo
    {
        return $this->belongsTo(Deck::class, 'deck4Id');
    }

    public function winner(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'winnerId');
    }
}
