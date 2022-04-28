<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('books/{book:slug}', [BookController::class, 'show']);

// Route::get('genres/{genre:slug}', function (Genre $genre) {
//     return view('welcome', [
//         'books' => $genre->books,
//         'currentGenre' => $genre,
//         'genres' => Genre::all()
//     ]);
// })->name('genre');

Route::get('authors/{author:slug}', function (Author $author) {
    return view('welcome', [
        'books' => $author->books,
        'genres' => Genre::all()
    ]);
});

// Route::get('users/{user:username}', function (User $user) {
//     return view('profile', [
//         'user' => $user
//     ]);
// });
