<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index', [
            'books' => Book::latest()
                ->filter(request(['search', 'genre', 'author']))
                ->paginate(8)->withQueryString()
        ]);
    }

    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }

    public function create()
    {
        return view('books.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'min:3|max:255|required|unique:books,title',
            'desc' => 'min:10|max:2500|required',
            'year' => 'required|integer|min:1900|max:2018',
            'genres' => 'required',
            'authors' => 'required',
            'cover' => 'mimes:jpeg,jpg,png,gif|max:10000|nullable',
        ]);

        $book = Book::create([
            'title' => request()->title,
            'body' => request()->desc,
            'year' => request()->year,

            'slug' => Str::slug(request()->title, '-'),
            'excerpt' => Str::words(request()->desc, 16, $end = '...')
        ]);

        // cover
        if (isset(request()->cover)) {

            $name = $book->slug;
            $filename = $name . '.' . request()->cover->getClientOriginalExtension();

            //============destroy==============//
            // list all filenames in given path
            $allfiles = File::files(str_replace('\\', '/', public_path('images/covers/')));

            // filter the ones that match the filename.*
            $matchingfiles = preg_grep('{' . $name . '}', $allfiles);

            if ($matchingfiles) {
                // iterate through files and echo their content
                foreach ($matchingfiles as $path) {
                    File::delete($path);
                }
            }
            //==================================//

            request()->cover->move(public_path('images/covers'), $filename);

            $path = str_replace('\\', '/', public_path('images/covers/' . $filename));
            $img = Image::make($path);
            // ->fit(600);
            $img->save();

            Book::where('slug', $book->slug)->update([
                'cover' => $filename
            ]);
        } else {
            $book->cover = 'user.jpg';
        }

        // authors and genres
        foreach (request()->get('genres') as $genre) {
            $book->genres()->sync($genre, false);
        }

        foreach (request()->get('authors') as $author) {
            $book->authors()->sync($author, false);
        }

        return redirect('/books/' . $book->slug)->with('success', 'Book has been created!');
    }
}
