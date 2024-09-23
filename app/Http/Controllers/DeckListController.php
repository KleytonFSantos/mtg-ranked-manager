<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Contracts\View\View;
use mtgsdk\Card;

class DeckListController extends Controller
{
    public function __invoke($playerId): View
    {
        $decks = Deck::where('ownerId', $playerId)->get();
        $decks->each(function ($deck) {
            $card = Card::where(['name' => $deck->name])->all()[0] ?? null;
            $deck->urlImages = $card ? $card->imageUrl : null;
        });

        return view('player-decks', compact('decks'));
    }
}
