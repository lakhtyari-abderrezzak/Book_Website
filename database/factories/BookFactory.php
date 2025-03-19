<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
            'author' =>  $this->faker->name(),
            'edition' =>  $this->faker->date(),
            'img_path' => $this->faker->imageUrl(),
            'featured' => $this->faker->boolean(),
        ];
    }
}
