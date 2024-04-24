<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Etape;
use App\Models\Ingredient;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recette>
 */
class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'ingredient' => $this->faker->words,
            'etape' => $this->faker->sentence,
            'user_id' => User::factory(),
            'ingredient_id' => Ingredient::factory(),
            'etape_id' => Etape::factory()
        ];
    }
}
