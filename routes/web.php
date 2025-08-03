<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PageController, FilmController};

Route::get('/', [PageController::class, 'homepage'])->name('pages.homepage');

Route::get('/films', [FilmController::class, 'index'])->name('films.index');


Route::get('/films/crea-film', [FilmController::class, 'create'])->name('films.create')->middleware('auth');

Route::post('/films/salva-film', [FilmController::class, 'store'])->name('films.store')->middleware('auth');

//metodo per rendere admin un normale user
Route::get('/admin/activate/{user}', [PageController::class, 'activate'])->name('admin.activate');

//visualizzo il film (dalla backoffice cliccando su visualizza)
Route::get('/films/{film}', [FilmController::class, 'show'])->name('films.show');

//crud
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])
  ->name('films.edit');

Route::put('/films/{film}/update', [FilmController::class, 'update'])
  ->name('films.update');

Route::delete('/films/{film}/deltete',[FilmController::class, 'destroy'])
  ->name('films.destroy'); 












/* 
Route::get('/films', [FilmController::class, 'index'])->name('films.index')->middleware('auth');



Route::get('/films/crea-film', [FilmController::class, 'create'])->name('films.create');

Route::post('/films/salva-film', [FilmController::class, 'store'])->name('films.store');    */

/* ->middleware('auth'); */