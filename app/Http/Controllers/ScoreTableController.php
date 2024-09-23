<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redis;

class ScoreTableController extends Controller
{

    public function __invoke(): View
    {
        return view('welcome', [
            'players' => json_decode(
                Redis::get('players') ?: Player::all()->sortByDesc('points')->toJson()
            )
        ]);
    }
}
