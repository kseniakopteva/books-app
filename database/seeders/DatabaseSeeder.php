<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\author_book;
use App\Models\Book;
use App\Models\book_genre;
use App\Models\Genre;
use App\Models\User;
use Database\Factories\BookGenreFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Genre::create([
            'name' => 'fantasy',
            'slug' => 'fantasy'
        ]);

        Genre::create([
            'name' => 'realism',
            'slug' => 'realism'
        ]);

        Genre::create([
            'name' => 'romance',
            'slug' => 'romance'
        ]);

        Genre::create([
            'name' => 'mystery',
            'slug' => 'mystery'
        ]);

        Author::factory(5)->create();

        Book::factory(9)->create();
        book_genre::factory()->create([
            'book_id' => 1,
            'genre_id' => 2
        ]);
        book_genre::factory()->create([
            'book_id' => 4,
            'genre_id' => 2
        ]);
        book_genre::factory()->create([
            'book_id' => 2,
            'genre_id' => 3
        ]);
        book_genre::factory()->create([
            'book_id' => 2,
            'genre_id' => 4
        ]);
        book_genre::factory()->create([
            'book_id' => 3,
            'genre_id' => 1
        ]);
        book_genre::factory()->create([
            'book_id' => 5,
            'genre_id' => 3
        ]);
        book_genre::factory()->create([
            'book_id' => 6,
            'genre_id' => 4
        ]);
        book_genre::factory()->create([
            'book_id' => 7,
            'genre_id' => 3
        ]);
        book_genre::factory()->create([
            'book_id' => 8,
            'genre_id' => 2
        ]);
        book_genre::factory()->create([
            'book_id' => 9,
            'genre_id' => 1
        ]);


        author_book::factory()->create([
            'book_id' => 1,
            'author_id' => 2
        ]);
        author_book::factory()->create([
            'book_id' => 2,
            'author_id' => 1
        ]);
        author_book::factory()->create([
            'book_id' => 3,
            'author_id' => 4
        ]);
        author_book::factory()->create([
            'book_id' => 3,
            'author_id' => 3
        ]);
        author_book::factory()->create([
            'book_id' => 4,
            'author_id' => 5
        ]);
        author_book::factory()->create([
            'book_id' => 5,
            'author_id' => 1
        ]);
        author_book::factory()->create([
            'book_id' => 6,
            'author_id' => 5
        ]);
        author_book::factory()->create([
            'book_id' => 7,
            'author_id' => 2
        ]);
        author_book::factory()->create([
            'book_id' => 8,
            'author_id' => 3
        ]);
        author_book::factory()->create([
            'book_id' => 9,
            'author_id' => 4
        ]);
    }
}
