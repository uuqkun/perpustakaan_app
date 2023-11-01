<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public static function find($id) { 
        $books = collect(self::all());

        // return $books->where("id", $id)->first();
        return $books->firstWhere("id", $id);
    }

}
