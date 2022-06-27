<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    public function create()
    {
        return view('authors.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'min:3|max:255|required|unique:authors,name',
            'bio' => 'min:10|max:2500|nullable',
            'year' => 'nullable|integer|min:1900|max:2018'
        ]);

        $author = Author::create([
            'name' => request()->name,
            'bio' => request()->bio,
            'birth_year' => request()->year,

            'slug' => Str::slug(request()->name, '-')
        ]);


        return redirect('/')->with('success', 'Author has been added!');
    }
}
