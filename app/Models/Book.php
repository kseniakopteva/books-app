<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Book
{
    public $title; // My First Post => my-first-post
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        $files = File::files(resource_path("books/"));
        return array_map(fn ($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        $path = resource_path("/books/{$slug}.html");
        // $path = __DIR__ . "/../resources/books/{$slug}.html";

        if (!file_exists($path)) {
            // return redirect('/');
            throw new ModelNotFoundException();
        }

        // 'remember' takes as parameters unique name, time it caches for, and what to cache.
        // here we cache something that a closure, or an arrow funcion, returns, which is
        // the content of a file which $path we declared earlier
        $book = cache()->remember("books.{$slug}", now()->addMinutes(20), fn () => file_get_contents($path));
        return $book;
    }
}
