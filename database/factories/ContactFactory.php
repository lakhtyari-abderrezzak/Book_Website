<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $text = [
            "I've been shopping at Book Haven for years, and it never disappoints! The collection is vast, the staff is knowledgeable, and I always find hidden gems. Highly recommended!",
            "This bookstore is a paradise for book lovers! The cozy ambiance, great selection, and helpful recommendations make every visit enjoyable.",
            "As a student, I rely on Book Haven for both textbooks and leisure reads. The prices are affordable, and the online ordering system is super convenient!"
        ];
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'body' => $text[random_int(0,2)]
        ];
    }
}
