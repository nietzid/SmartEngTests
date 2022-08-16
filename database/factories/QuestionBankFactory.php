<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuestionBankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $passagesIDs= DB::table('passages')->pluck('id');
        return [
            'question' => fake()->sentence(),
            'answer' => fake()->sentence(), 
            'passage_id' => fake()->randomElement($passagesIDs),
        ];
    }
}
