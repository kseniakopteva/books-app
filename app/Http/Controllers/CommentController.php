<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Review $review)
    {
        //validate
        request()->validate([
            'body' => 'required'
        ]);

        $new_body = trim(request('body'));

        $new = $review->comments()->create([
            'user_id' => request()->user()->id,
            'body' => $new_body
        ]);

        return redirect('/books/' . $review->book->slug . '#' . $review->id);
    }
}
