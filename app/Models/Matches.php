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
        'banned_deck1Id',
        'banned_deck2Id',
        'banned_deck3Id',
        'banned_deck4Id',
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

    public function bannedDeck1(): BelongsTo
    {
        return $this->belongsTo(Deck::class, 'banned_deck1Id');
    }

    public function bannedDeck2(): BelongsTo
    {
        return $this->belongsTo(Deck::class, 'banned_deck2Id');
    }

    public function bannedDeck3(): BelongsTo
    {
        return $this->belongsTo(Deck::class, 'banned_deck3Id');
    }

    public function bannedDeck4(): BelongsTo
    {
        return $this->belongsTo(Deck::class, 'banned_deck4Id');
    }

    public function winner(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'winnerId');
    }
}
