<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anime/search', [AnimeController::class, "showForm"])->name('anime.search.form');
Route::post('/anime/search', [AnimeController::class, "showInformationAnime"])->name('anime.search.results');
