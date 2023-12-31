<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() { 
        return view("books", [
            "title"=> "Books",
            "books" => Book::all()
        ]);
    }

    public function show($id) { 
        return view('book', [
            'title' => 'Book',
            "book" => Book::find($id)
        ]);
    }


    function post(Request $request)
    {
        $books = new Book;
        $books->title = $request->title;
        $books->subtitle = $request->subtitle;
        $books->authors = $request->authors;
        $books->image = $request->image;
        $books->url = $request->url;
        $books->checkedOut = $request->checkedOut;

        $books->save();
        return response()->json(
            [
                "message" => "Suceess",
                "data" => $books
            ]
        );
    }


    function put($id)
    {
        return response()->json(
            [
                "message" => "PUT method from api.php suceess " . $id
            ]
        );
    }

    function delete($id)
    {
        return response()->json(
            [
                "message" => "DELETE method suceess " . $id
            ]
        );
    }
}