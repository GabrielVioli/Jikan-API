<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/search', [AnimeController::class, "showForm"])->name('showForm');
Route::post('/send-data', [AnimeController::class, "showImageAnime"])->name('showImageAnime');
Route::post('/searchId', [AnimeController::class, "searchId"])->name('searchId');
