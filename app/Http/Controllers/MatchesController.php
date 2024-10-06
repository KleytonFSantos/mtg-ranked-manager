<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Exception;
use Illuminate\Contracts\View\View;
use mtgsdk\Card;

class MatchesController extends Controller
{
    public function __invoke(): View
    {
       try {
           $matches = Matches::with('deck1', 'deck2', 'deck3', 'deck4')->get();

           return view('matches-show', compact('matches'));
       } catch (\Throwable $e) {
           return view('error', ['message' => $e->getMessage()]);
       }
    }
}
