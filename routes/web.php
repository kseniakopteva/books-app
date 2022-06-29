<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageFactoryInterface;

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
Route::post('books/{book:slug}/reviews/create', [ReviewController::class, 'create'])->middleware('auth');
Route::post('books/{book:slug}/reviews/store', [ReviewController::class, 'store'])->middleware('auth');
Route::post('books/{book:slug}/reviews/{review:id}/destroy', [ReviewController::class, 'destroy'])->middleware('auth')->middleware('owner');
Route::post('books/{book:slug}/reviews/{review:id}/edit', [ReviewController::class, 'edit'])->middleware('auth')->middleware('owner');
Route::post('books/{book:slug}/reviews/{review:id}/update', [ReviewController::class, 'update'])->middleware('auth')->middleware('owner');

Route::post('/reviews/{review:id}/comments/store', [CommentController::class, 'store'])->middleware('auth');

Route::post('books/{book:slug}/quotes/create', [QuoteController::class, 'create'])->middleware('auth');
Route::post('books/{book:slug}/quotes/store', [QuoteController::class, 'store'])->middleware('auth');
Route::post('books/{book:slug}/quotes/{quote:id}/destroy', [QuoteController::class, 'destroy'])->middleware('auth')->middleware('owner');
Route::post('books/{book:slug}/quotes/{quote:id}/edit', [QuoteController::class, 'edit'])->middleware('auth')->middleware('owner');
Route::post('books/{book:slug}/quotes/{quote:id}/update', [QuoteController::class, 'update'])->middleware('auth')->middleware('owner');


Route::post('profile/favorite/{book:slug}', [UserController::class, 'addBook'])->middleware('auth');

Route::post('books/{book:slug}/quotes/{quote:id}/favorite', [UserController::class, 'addQuote'])->middleware('auth');
Route::post('profile/{user:username}/remove-quote', [UserController::class, 'removeQuote'])->middleware('auth');


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('profile', [UserController::class, 'show'])->middleware('auth');
Route::get('profile/{user:username}/edit', [UserController::class, 'edit'])->middleware('owner');
Route::post('profile/{user:username}/update', [UserController::class, 'update'])->middleware('auth');
Route::get('profile/{user:username}', [UserController::class, 'show']);



Route::get('admin/books/create', [BookController::class, 'create'])->middleware('admin');
Route::post('admin/books', [BookController::class, 'store'])->middleware('admin');

Route::get('admin/authors/create', [AuthorController::class, 'create'])->middleware('admin');
Route::post('admin/authors', [AuthorController::class, 'store'])->middleware('admin');

Route::get('admin/genres/create', [GenreController::class, 'create'])->middleware('admin');
Route::post('admin/genres', [GenreController::class, 'store'])->middleware('admin');

Route::post('admin/promote/{user:username}', [UserController::class, 'promote'])->middleware('admin');
Route::post('admin/demote/{user:username}', [UserController::class, 'demote'])->middleware('admin');
