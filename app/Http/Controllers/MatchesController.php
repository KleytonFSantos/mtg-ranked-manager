<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Contracts\View\View;
use mtgsdk\Card;

class MatchesController extends Controller
{
    public function __invoke(): View
    {
        $matches = Matches::with('deck1', 'deck2', 'deck3', 'deck4')->get();

        $matches->each(function ($match) {
            $match->deck1->card = Card::where(['name' => $match->deck1->name])->all()[0] ?? null;
            $match->deck2->card = Card::where(['name' => $match->deck2->name])->all()[0] ?? null;
            $match->deck3->card = Card::where(['name' => $match->deck3->name])->all()[0] ?? null;
            $match->deck4->card = Card::where(['name' => $match->deck4->name])->all()[0] ?? null;
        });

        return view('matches-show', compact('matches'));
    }
}
