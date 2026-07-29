<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'title' => fake()->company(),
            'subtitle' => fake()->sentence(2),
            'description' => fake()->paragraph(),
            'sort_order' => fake()->numberBetween(1, 10),
            'is_featured' => false,
            'is_active' => true,
        ];
    }
}
