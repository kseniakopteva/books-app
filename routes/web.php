<?php

use App\Models\Book;
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

    $files = File::files(resource_path("books"));

    $books = collect($files)
        ->map(function ($file) {
            $document = YamlFrontMatter::parseFile($file);

            return new Book(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            );
        });

    return view('welcome', [
        'books' => $books
    ]);
});

Route::get('books/{book}', function ($slug) {

    // find a book by its slug and pass it to a view called "books"
    return view('book', [
        'book' => Book::find($slug)
    ]);

    // slug can only be words with dashes and underscores
})->where('book', '[A-z_\-]+');
