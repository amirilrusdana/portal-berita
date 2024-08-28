<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->sentence(mt_rand(2,8)),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(),
            //'body' => '<p>' . implode('</p><p>',fake()->paragraph(mt_rand(5,10))). '</p><p>',
            'body' => collect(fake()->paragraphs(mt_rand(5,10)))
                        -> map(fn($p) => "<p>$p</p>")
                        -> implode(''),
            'user_id' => fake()->numberBetween(1, 11),
            'category_id' => fake()->numberBetween(1, 3),
            'published_at' => fake()->dateTimeBetween('-1 year')->format('Y-m-d H:i:s'),
        ];
    }
}
