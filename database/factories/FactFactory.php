<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fact>
 */
class FactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $func_facts = ["The world’s oldest library is over 2,000 years old!
                        The Library of Ashurbanipal in Iraq dates back to the 7th century BCE and contained over 30,000 clay tablets with ancient texts.",
            "The longest novel ever written has over 1.2 million words!
                        À la recherche du temps perdu (In Search of Lost Time) by Marcel Proust holds the record, with nearly 4,200 pages!",
            "There’s a book that you can only read when it’s heated! 🔥
                        The Book That Can’t Wait is printed with disappearing ink, meaning if you don’t read it fast enough, the words vanish!"
        ];
        return [
            'fun_facts' => $func_facts[random_int(0, 2)]
        ];
    }
}
