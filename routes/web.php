<?php

use App\Http\Controllers\DeckListController;
use App\Http\Controllers\ScoreTableController;
use Illuminate\Support\Facades\Route;

Route::get('/', ScoreTableController::class)->name('scoreTable');
Route::get('/decks/{playerId}', DeckListController::class)->name('playerDecks');
