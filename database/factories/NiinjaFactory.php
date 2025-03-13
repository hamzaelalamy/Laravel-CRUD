<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Niinja>
 */
class NiinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'skill' => fake()->numberBetween(0,100),
            'email' => fake()->unique()->safeEmail(),
            'dojo_id' => Dojo::inRandomOrder()->first()->id,
        ];
    }
}
