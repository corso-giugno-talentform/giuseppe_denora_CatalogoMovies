<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PageController, FilmController};

Route::get('/', [PageController::class, 'homepage'])->name('pages.homepage');

Route::get('/films', [FilmController::class, 'index'])->name('films.index');
Route::get('/films/crea-film', [FilmController::class, 'create'])->name('films.create');

Route::post('/films/salva-film', [FilmController::class, 'store'])->name('films.store');
/* 
Route::get('/films', [FilmController::class, 'index'])->name('films.index')->middleware('auth');



Route::get('/films/crea-film', [FilmController::class, 'create'])->name('films.create');

Route::post('/films/salva-film', [FilmController::class, 'store'])->name('films.store');    */

/* ->middleware('auth'); */