<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Book $book)
    {
        return view('reviews.create', compact('book'));
    }

    public function store(Book $book)
    {
        //validate
        request()->validate([
            'body' => 'required'
        ]);

        $new_body = trim(request('body'));

        $new = $book->reviews()->create([
            'user_id' => request()->user()->id,
            'body' => $new_body
        ]);

        return redirect('/books/' . $book->slug . '#' . $new->id);
    }

    public function edit(Book $book, Review $review)
    {
        return view('reviews.edit', compact('book', 'review'));
    }

    public function update(Book $book, Review $review)
    {
        //validate

        Review::where('id', $review->id)->update([
            'body' => request()->body
        ]);

        return back();
        // return redirect('/books/' . $book->slug . '#' . $review->id);
    }

    public function destroy(Book $book, Review $review)
    {
        $review->delete();

        return back();
        // return redirect('/books/' . $book->slug);
    }
}
