<?php

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome', [
        'books' => Book::get(),
        // 'genres' => Genre::get()
    ]);
});

Route::get('books/{book:slug}', function (Book $book, Genre $genre) {
    // find a book by its slug and pass it to a view called "books"
    return view('book', [
        'book' => $book,
        'genres' => $book->genres
    ]);
});

Route::get('genres/{genre:slug}', function (Genre $genre) {
    // dd($genre->books());
    return view('welcome', [
        'books' => $genre->books
    ]);
});

Route::get('authors/{author:slug}', function (Author $author) {
    return view('welcome', [
        'books' => $author->books
    ]);
});

// Route::get('users/{user:username}', function (User $user) {
//     return view('profile', [
//         'user' => $user
//     ]);
// });
