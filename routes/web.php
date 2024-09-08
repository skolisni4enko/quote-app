<?php

use App\Http\Controllers\Phrase\PhraseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/phrase', [PhraseController::class, 'index']);
Route::resource('phrases', PhraseController::class);
