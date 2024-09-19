<?php

use App\Http\Controllers\Phrase\PhraseController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [PhraseController::class, 'index'])->name('phrase.index');
Route::get('/phrase/create', [PhraseController::class, 'create'])->name('phrase.create');
Route::post('/phrase', [PhraseController::class, 'store'])->name('phrase.store');
Route::get('phrase/{id}', [PhraseController::class, 'show'])->name('phrase.show');
Route::get('/phrase/{phrase}/edit', [PhraseController::class, 'edit'])->name('phrase.edit');
Route::put('/phrase/{phrase}', [PhraseController::class, 'update'])->name('phrase.update');
Route::delete('/phrase/{phrase}', [PhraseController::class, 'destroy'])->name('phrase.destroy');
