<?php

namespace Database\Factories;

use App\Enums\TaskPriorities;
use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\task>
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
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(TaskStatus::valueToArray()),
            'priority' => $this->faker->randomElement(TaskPriorities::valueToArray()),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'tags' => $this->faker->words(3),
            'category' => $this->faker->randomElement(['work', 'personal', 'family']),
        ];
    }
}
