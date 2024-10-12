<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->realText(),
            'status' => fake()->randomElement(['finished', 'progress']),
            'ends_at' => fake()->dateTimeBetween('now', '3 days'),
            'created_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'created_by' => User::factory(),

        ];
    }
}
