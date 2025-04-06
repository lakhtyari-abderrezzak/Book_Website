<?php

namespace Database\Factories;

use App\Models\Category;
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
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(2),
            'author' =>  $this->faker->name(),
            'edition' =>  $this->faker->date(),
            'description' =>  $this->faker->paragraph(),
            'img_path' => $this->faker->imageUrl(),
            'featured' => $this->faker->boolean(),
        ];
    }
}
