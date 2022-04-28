<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'books' => Book::latest()->filter(request(['search', 'genre']))->get(),
            'genres' => Genre::all(),
            'currentGenre' => Genre::firstWhere('slug', request('genre'))
        ]);
    }

    public function show(Book $book)
    {
        return view('book', [
            'book' => $book
        ]);
    }
}
