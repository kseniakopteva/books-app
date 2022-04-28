<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $body = $this->faker->text($maxNbChars = 1000);
        $title = Str::words($this->faker->sentence(), 3, '');

        return [
            // 'author_id' => rand(1, 5),
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'body' => $body,
            'year' => rand(1888, 2022),
            'excerpt' => Str::words($body, 10, $end = '...')
        ];
    }
}
