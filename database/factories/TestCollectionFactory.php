<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestCollection>
 */
class TestCollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => "ab",
            'description' => fake()->paragraph(2),
            'date' => fake()->date(),
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
        ];
    }
}
