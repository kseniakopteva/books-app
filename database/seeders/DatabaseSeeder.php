<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\author_book;
use App\Models\Book;
use App\Models\book_genre;
use App\Models\Genre;
use App\Models\Review;
use App\Models\Role;
use App\Models\User;
use App\Models\user_genre;
use App\Models\user_role;
use Database\Factories\BookGenreFactory;
use Database\Factories\user_genreFactory;
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
        User::factory()->create([
            'id' => 1,
            'username' => 'ksenia',
            'password' => 'password',
            'age' => 20,
            'bio' => 'First ever user on this site.',
            'email' => 'ksenija.kopteva@gmail.com',
            'name' => 'Ksenija Kopteva',
            'image' => 'user-1.jpeg',
            'role_id' => '3'
        ]);

        Role::factory()->create([
            'id' => 1,
            'name' => 'user'
        ]);
        Role::factory()->create([
            'id' => 2,
            'name' => 'mod'
        ]);
        Role::factory()->create([
            'id' => 3,
            'name' => 'admin'
        ]);

        User::factory()->create([
            'id' => 2,
            'image' => 'user-2.jpg'
        ]);
        User::factory()->create([
            'id' => 3,
            'image' => 'user-3.jpg'
        ]);
        User::factory()->create([
            'id' => 4,
            'image' => 'user-4.jpg'
        ]);
        User::factory()->create([
            'id' => 5,
            'image' => 'user-5.jpg'
        ]);
        User::factory()->create([
            'id' => 6,
            'image' => 'user-6.jpg'
        ]);
        User::factory()->create([
            'id' => 7,
            'image' => 'user-7.jpg'
        ]);
        User::factory()->create([
            'id' => 8,
            'image' => 'user-8.jpg'
        ]);
        User::factory()->create([
            'id' => 9,
            'image' => 'user-9.jpg'
        ]);
        User::factory()->create([
            'id' => 10,
            'image' => 'user-10.jpg'
        ]);
        User::factory()->create([
            'id' => 11,
            'image' => 'user-11.jpg'
        ]);

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

        Book::factory(10)->create();
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
            'genre_id' => 2
        ]);
        book_genre::factory()->create([
            'book_id' => 10,
            'genre_id' => 3
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
            'author_id' => 3
        ]);
        author_book::factory()->create([
            'book_id' => 10,
            'author_id' => 2
        ]);


        Review::factory()->create([
            'user_id' => 1,
            'book_id' => 1
        ]);
        Review::factory()->create([
            'user_id' => 2,
            'book_id' => 1
        ]);
        Review::factory()->create([
            'user_id' => 3,
            'book_id' => 2
        ]);
        Review::factory()->create([
            'user_id' => 4,
            'book_id' => 3
        ]);
        Review::factory()->create([
            'user_id' => 5,
            'book_id' => 4
        ]);
        Review::factory()->create([
            'user_id' => 6,
            'book_id' => 5
        ]);
        Review::factory()->create([
            'user_id' => 7,
            'book_id' => 4
        ]);
        Review::factory()->create([
            'user_id' => 8,
            'book_id' => 3
        ]);
        Review::factory()->create([
            'user_id' => 9,
            'book_id' => 7
        ]);
        Review::factory()->create([
            'user_id' => 10,
            'book_id' => 8
        ]);
        Review::factory()->create([
            'user_id' => 11,
            'book_id' => 4
        ]);
        Review::factory()->create([
            'user_id' => 2,
            'book_id' => 9
        ]);
        Review::factory()->create([
            'user_id' => 2,
            'book_id' => 10
        ]);
        Review::factory()->create([
            'user_id' => 9,
            'book_id' => 10
        ]);
        Review::factory()->create([
            'user_id' => 5,
            'book_id' => 10
        ]);



        user_genre::factory()->create([
            'user_id' => 1,
            'genre_id' => 4
        ]);
        user_genre::factory()->create([
            'user_id' => 1,
            'genre_id' => 3
        ]);
        user_genre::factory()->create([
            'user_id' => 2,
            'genre_id' => 1
        ]);
        user_genre::factory()->create([
            'user_id' => 2,
            'genre_id' => 3
        ]);
        user_genre::factory()->create([
            'user_id' => 3,
            'genre_id' => 3
        ]);
        user_genre::factory()->create([
            'user_id' => 4,
            'genre_id' => 1
        ]);
    }
}
