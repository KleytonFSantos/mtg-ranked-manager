<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ScoreTableController extends Controller
{

    public function __invoke(Request $request): View
    {
        $players = Player::all()->sortByDesc('points');

        return view('welcome', compact('players'));
    }
}
