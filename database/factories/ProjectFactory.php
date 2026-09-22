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
            'client' => fake()->company(),
            'location' => fake()->city().', Perú',
            'service_type' => 'ITSE y Licencias',
            'subtitle' => fake()->sentence(2),
            'description' => fake()->paragraph(),
            'summary' => fake()->sentence(8),
            'services_performed' => '<ul><li>'.fake()->sentence(4).'</li></ul>',
            'result' => '<p>'.fake()->paragraph().'</p>',
            'sort_order' => fake()->numberBetween(1, 10),
            'is_featured' => false,
            'is_active' => true,
        ];
    }
}
