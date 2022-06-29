<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GenreController extends Controller
{
    public function create()
    {
        return view('genres.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'min:3|max:255|required|unique:genres,name',
        ]);

        $genre = Genre::create([
            'name' => request()->name,

            'slug' => Str::slug(request()->name, '-')
        ]);

        return redirect('/')->with('success', 'Genre has been added!');
    }
}
