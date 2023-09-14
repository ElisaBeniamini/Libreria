<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PublicController::class, 'homepage'])
    ->name('homepage');

Route::get('/profile', [PublicController::class, 'profile'])
    ->name('profile')->middleware('auth');

//Route::get('/libri/create', [BookController::class, 'create'])->name('books.create'); //rotta GET  che ci fa vedere il form     // create è il form

//Route::post('/libri/store', [BookController::class, 'store']) //rotta POST che ci fa salva quello che abbiamo scitto sul form
//    ->name('books.store');

//Route::get('/libri', [BookController::class, 'index'])  //indice dei libri LETTURA get
//    ->name('books.index');

//Route::get('/libri/{book}/dettagli', [BookController::class, 'show']) // mostra in sola lettura il nostro libro  rotta get
//    ->name('books.show');

//// edit e update sono i metodi che CONTROLLANo il modifica uno GET uno PUT
//Route::get('/libri/{book}/modifica', [BookController::class, 'edit'])
//    ->name('books.edit')->middleware('auth');


//Route::put('/libri/update', [BookController::class, 'update'])
//    ->name('books.update')->middleware('auth');

//// delete sono i metodo che CONTROLLA l ELIMINA  ::delete 
//Route::delete('/libri/{book}/elimina', [BookController::class, 'destroy'])
//    ->name('books.destroy')->middleware('auth');

Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
