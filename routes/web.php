<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/libri', [BookController::class, 'index'])
    ->name('books.index');

Route::get('/libri/create', [BookController::class, 'create'])
    ->name('books.create'); // create è il form

Route::post('/libri/store', [BookController::class, 'store'])
    ->name('books.store'); // è l action del form


Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])
    ->name('books.show');

Route::get('/', [PublicController::class, 'homepage'])
    ->name('homepage');
