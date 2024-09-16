<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Contracts\View\View;

class DeckListController extends Controller
{
    public function __invoke($playerId): View
    {
        $decks = Deck::where('ownerId', $playerId)->get();

        return view('player-decks', compact('decks'));
    }
}
