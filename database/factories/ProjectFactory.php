<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ProjectFactory extends Factory
{
    protected $model = \App\Models\Project::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(6),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'due_date' => $this->faker->date(),
            'image_path' => $this->faker->imageUrl(),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => time(),
            'updated_at' => time(),
        ];
    }
}
