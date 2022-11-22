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
        $userIDs= DB::table('users')->pluck('id');
        $category=["Summary","Short Answer Question","Fill in The Blank","True or False","Multiple Choice"];
        return [
            'question' => fake()->sentence(),
            'answer' => fake()->sentence(), 
            'user_id' => fake()->randomElement($userIDs),
            'passage_id' => fake()->randomElement($passagesIDs),
            'category'=> fake()->randomElement($category),
        ];
    }
}
