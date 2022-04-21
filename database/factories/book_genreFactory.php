<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book_genre>
 */
class book_genreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // $bookIds = Book::all('id')->all();
        // $genreIds = Genre::all('id')->all();

        return [
            // 'book_id' => $this->faker->randomElement($bookIds),
            // 'genre_id' => $this->faker->randomElement($genreIds)
        ];
    }
}
