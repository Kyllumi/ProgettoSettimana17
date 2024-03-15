<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date = fake()->date();
        return [
            'title' => fake()->text(30),
            'description' => fake()->text(200),
            'start_date' => $start_date,
            'project_id' => Project::get()->random()->id,
        ];
    }
}
