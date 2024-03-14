<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tasks = ['Task1', 'Task2', 'Task3', 'Task4', 'Task5'];
        return [
            'nome' => fake()->randomElement($tasks),
            'created_at' => fake()-> dateTime(),
        ];
    }
}
