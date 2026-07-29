<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'excerpt' => fake()->paragraph(2),
            'body' => '<p>'.implode('</p><p>', fake()->paragraphs(3)).'</p>',
            'is_published' => false,
            'published_at' => null,
        ];
    }
}
