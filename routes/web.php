<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "books" => Book::all(),
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title'=> 'About'
    ]);
});

Route::get('/books', [BookController::class,'index']);

// single book route
Route::get('/books/{id}', [BookController::class,'show']);