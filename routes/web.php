<?php

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

Route::get('/libri', [PublicController::class, 'index'])
    ->name('books.index');

Route::get('/libri/create', [PublicController::class, 'create'])
    ->name('books.create'); // create è il form

Route::post('/libri/store', [PublicController::class, 'store'])
    ->name('books.store'); // è l action del form


Route::get('/libri/{book}/dettagli', [PublicController::class, 'show'])
    ->name('books.show');



    //il nome della rotta viene usato da chi cazzo viene 