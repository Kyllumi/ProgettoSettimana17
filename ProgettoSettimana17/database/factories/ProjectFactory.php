<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $languages = ['HTML', 'CSS', 'Python', 'JavaScript', 'PHP', 'Java'];

        return [
            'name' => fake()->text(30),
            'description' => fake()->text(200),
            'language' => fake()->randomElement($languages),
            'user_id' => User::get()->random()->id,
        ];
    }
}
