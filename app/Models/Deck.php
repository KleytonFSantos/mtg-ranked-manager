<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deck extends Model
{
    use HasFactory;

    protected $table = 'decks';

    protected $fillable = [
        'name',
        'liga_magic_link',
        'ownerId',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'ownerId');
    }

    public function matches(): HasMany
    {
        return $this->hasMany(Matches::class, 'deck1Id')
            ->orWhere('deck2Id', $this->id)
            ->orWhere('deck3Id', $this->id)
            ->orWhere('deck4Id', $this->id);
    }
}
