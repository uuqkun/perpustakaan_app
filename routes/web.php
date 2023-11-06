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
    return view('welcome', ['title' => 'Welcome']);
});

Route::get('/buku', function () {
    $buku = [
        [
            'id' => 1,
            'title' => "Tales of Arise",
            'author' => 'Anonymous'
        ],
        [
            'id' => 2,
            'title' => "Tales of Zesttria",
            'author' => 'Anonymous'
        ],
        [
            'id' => 1,
            'title' => "Tales of Berseria",
            'author' => 'Anonymous'
        ],
    ];



    return view('buku', [
        'title' => 'List of Books',
        'buku' => $buku,
    ]);
});




