<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articles>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2,8)),
            'excerpt' => fake()->sentence(mt_rand(10,25)),
            'body' => fake()->paragraph(mt_rand(5,10)),
            'image_url' => "https://picsum.photos/200"
        ];
    }
}
