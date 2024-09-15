<?php

use App\Http\Controllers\ScoreTableController;
use Illuminate\Support\Facades\Route;

Route::get('/', ScoreTableController::class)->name('scoreTable');
