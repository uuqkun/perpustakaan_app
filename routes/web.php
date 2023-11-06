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
            'author' => 'Anonymous',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi neque deserunt fuga? Nisi vel magni sunt nulla rem placeat et. Et doloremque expedita sunt quas, veniam ipsa laborum, repellendus cupiditate, exercitationem reprehenderit nemo tenetur eaque! Voluptatum illum sequi quae tenetur.'
        ],
        [
            'id' => 2,
            'title' => "Tales of Zesttria",
            'author' => 'Anonymous',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi neque deserunt fuga? Nisi vel magni sunt nulla rem placeat et. Et doloremque expedita sunt quas, veniam ipsa laborum, repellendus cupiditate, exercitationem reprehenderit nemo tenetur eaque! Voluptatum illum sequi quae tenetur.'
        ],
        [
            'id' => 3,
            'title' => "Tales of Berseria",
            'author' => 'Anonymous',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi neque deserunt fuga? Nisi vel magni sunt nulla rem placeat et. Et doloremque expedita sunt quas, veniam ipsa laborum, repellendus cupiditate, exercitationem reprehenderit nemo tenetur eaque! Voluptatum illum sequi quae tenetur.'
        ],
    ];

    return view('buku', [
        'title' => 'List of Books',
        'books' => $buku,
    ]);
});

Route::get('/buku/{id}', function ($id) {
    $buku = [
        [
            'id' => 1,
            'title' => "Tales of Arise",
            'author' => 'Anonymous',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi neque deserunt fuga? Nisi vel magni sunt nulla rem placeat et. Et doloremque expedita sunt quas, veniam ipsa laborum, repellendus cupiditate, exercitationem reprehenderit nemo tenetur eaque! Voluptatum illum sequi quae tenetur.'
        ],
        [
            'id' => 2,
            'title' => "Tales of Zesttria",
            'author' => 'Anonymous',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi neque deserunt fuga? Nisi vel magni sunt nulla rem placeat et. Et doloremque expedita sunt quas, veniam ipsa laborum, repellendus cupiditate, exercitationem reprehenderit nemo tenetur eaque! Voluptatum illum sequi quae tenetur.'
        ],
        [
            'id' => 3,
            'title' => "Tales of Berseria",
            'author' => 'Anonymous',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi neque deserunt fuga? Nisi vel magni sunt nulla rem placeat et. Et doloremque expedita sunt quas, veniam ipsa laborum, repellendus cupiditate, exercitationem reprehenderit nemo tenetur eaque! Voluptatum illum sequi quae tenetur.'
        ],
    ];

    $selected = [];

    foreach ($buku as $singleBook) {
        if ($id == $singleBook['id']) {
            $selected = $singleBook;
        }
    }

    return view('singleBook', [
        'book' => $buku
    ]);
});




