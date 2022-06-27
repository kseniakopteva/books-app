<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function create(Book $book)
    {
        return view('quotes.create', compact('book'));
    }

    public function store(Book $book)
    {
        //validate
        request()->validate([
            'body' => 'required'
        ]);

        $new_body = trim(request('body'));

        $new = $book->quotes()->create([
            'author_id' => request()->user()->id,
            'body' => $new_body
        ]);

        return redirect('/books/' . $book->slug);
    }

    public function edit(Book $book, Quote $quote)
    {
        return view('quotes.edit', compact('book', 'quote'));
    }

    public function update(Book $book, Quote $quote)
    {
        //validate

        Quote::where('id', $quote->id)->update([
            'body' => request()->body
        ]);

        // return back();
        return redirect('/books/' . $book->slug);
    }

    public function destroy(Book $book, Quote $quote)
    {
        $quote->delete();

        // return back();
        return redirect('/books/' . $book->slug);
    }
}
