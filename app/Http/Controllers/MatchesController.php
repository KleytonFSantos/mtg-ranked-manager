<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redis;
use mtgsdk\Card;

class MatchesController extends Controller
{
    public function __invoke(): View
    {
        $matches = Redis::get('matches');

        if (!$matches) {
            $matches = Matches::with('deck1', 'deck2', 'deck3', 'deck4')->get();

            $matches->each(function ($match) {
                $match->deck1->card = Card::where(['name' => $match->deck1->name])->all()[0] ?? null;
                $match->deck2->card = Card::where(['name' => $match->deck2->name])->all()[0] ?? null;
                $match->deck3->card = Card::where(['name' => $match->deck3->name])->all()[0] ?? null;
                $match->deck4->card = Card::where(['name' => $match->deck4->name])->all()[0] ?? null;
            });

            $matchesArray = $matches->map(function ($match) {
                $matchArray = $match->toArray();
                $matchArray['deck1'] = $match->deck1->toArray();
                $matchArray['deck1']['card'] = $match->deck1->card?->imageUrl;
                $matchArray['deck2'] = $match->deck2->toArray();
                $matchArray['deck2']['card'] = $match->deck2->card?->imageUrl;
                $matchArray['deck3'] = $match->deck3->toArray();
                $matchArray['deck3']['card'] = $match->deck3->card?->imageUrl;
                $matchArray['deck4'] = $match->deck4->toArray();
                $matchArray['deck4']['card'] = $match->deck4->card?->imageUrl;
                $matchArray['winner'] = $match->winner->name;
                return $matchArray;
            })->toArray();

            Redis::set('matches', json_encode($matchesArray, JSON_PRETTY_PRINT), 'EX', 60 * 60 * 4); // 4 hours
        } else {
            $matches = json_decode($matches, true);
        }
        return view('matches-show', compact('matches'));
    }
}
