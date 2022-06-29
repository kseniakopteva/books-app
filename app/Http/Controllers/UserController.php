<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    public function show(User $user)
    {
        if (!isset($user->username)) {
            $user = Auth::user();
        }

        return view('users.show', [
            'user' => $user
        ]);
    }
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $attributes = request()->validate([
            'username' => 'required|min:3|max:255|regex:/\w*$/|unique:users,username,' . $user->username . ',username',
            'email' => 'required|email',
            'name' => 'max:255|nullable|regex:/^[a-zA-Z ]*$/',
            'age' => 'numeric|nullable',
            'bio' => 'nullable',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000' // max 10000kb
        ]);

        if (isset($request->image)) {

            $name = 'user-' . $user->id;
            $filename = $name . '.' . request()->image->getClientOriginalExtension();

            //============destroy==============//
            // list all filenames in given path
            $allfiles = File::files(str_replace('\\', '/', public_path('images/pfp/')));

            // filter the ones that match the filename.*
            $matchingfiles = preg_grep('{' . $name . '}', $allfiles);

            if ($matchingfiles) {
                // iterate through files and echo their content
                foreach ($matchingfiles as $path) {
                    File::delete($path);
                }
            }
            //==================================//

            request()->image->move(public_path('images/pfp'), $filename);

            $path = str_replace('\\', '/', public_path('images/pfp/' . $filename));
            $img = Image::make($path)->fit(600);
            $img->save();

            User::where('username', $user->username)->update([
                'image' => $filename
            ]);
        }

        // $image = Image::make('public/' . $filename)->resize(200, 200);

        // dd($request->get('genres'));

        User::where('username', $user->username)->update([
            'username' => $request->username,
            'email' => $request->email,
            'name' => $request->name,
            'age' => $request->age,
            'bio' => $request->bio
        ]);

        $user->genres()->sync($request->get('genres'));

        if (isset($request->list)) {
            User::where('username', $user->username)->update([
                'list' => true
            ]);
        } else {
            User::where('username', $user->username)->update([
                'list' => false
            ]);
        }

        return redirect('/profile/' . $user->username);
    }

    public function addQuote(Book $book, Quote $quote)
    {
        User::where('id', auth()->user()->id)->first()->update(['quote_id' => $quote->id]);

        return redirect('/books/' . $book->slug)->with('success', 'Changed favorite quote');
    }

    public function removeQuote(User $user)
    {
        User::where('id', auth()->user()->id)->first()->update(['quote_id' => null]);

        return redirect('/profile/')->with('success', 'Removed favorite quote');
    }

    public function addBook(Book $book)
    {
        $user = auth()->user();
        if (in_array($book->id, $user->books->pluck('id')->toArray())) {
            //
            User::where('id', $user->id)->first()->books()->detach($book->id);
            return redirect('/books/' . $book->slug)->with('success', 'Removed book from wishlist');
            //
        } else if (!in_array($book->id, $user->books->pluck('id')->toArray())) {
            //
            User::where('id', $user->id)->first()->books()->attach($book->id);
            return redirect('/books/' . $book->slug)->with('success', 'Added book to <a class="underline" href="/profile#list">wishlist</a>');
            //
        }
    }

    public function promote(User $user)
    {
        if ($user->role->name === 'user') {
            User::where('id', $user->id)->update(['role_id' => 2]);
        } elseif ($user->role->name === 'mod') {
            User::where('id', $user->id)->update(['role_id' => 3]);
        }

        return redirect('/profile/' . $user->username);
    }

    public function demote(User $user)
    {
        if ($user->role->name === 'mod') {
            User::where('id', $user->id)->update(['role_id' => 1]);
        } elseif ($user->role->name === 'admin') {
            User::where('id', $user->id)->update(['role_id' => 2]);
        }

        return redirect('/profile/' . $user->username);
    }
}
