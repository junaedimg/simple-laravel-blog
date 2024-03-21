<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(rand(3, 6)),
            'slug' => fake()->slug(rand(3, 5)),
            'user_id' => rand(1, 5),
            'category_id' => rand(1, 5),
            'excerpt' => fake()->sentence(20),
            'body' => fake()->paragraph(50)
        ];
    }
}
