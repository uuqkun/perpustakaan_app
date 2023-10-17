<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    function get()
    {
        $books = Book::all();

        return response()->json(
            [
                "message" => "GET method suceess",
                "data" => $books
            ]
        );
    }

    function post(Request $request)
    {
        $books = new Book;
        $books->title = $request->title;
        $books->author = $request->author;
        $books->genre = $request->genre;
        $books->yearPublished = $request->yearPublished;
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