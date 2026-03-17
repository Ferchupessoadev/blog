<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence(6);
        return [
            'title'        => Str::limit($title, 128),
            'description'  => $this->faker->text(225),
            'image'        => $this->faker->imageUrl(640, 480, 'posts', true),
            'slug'         => Str::slug($title),
            'content'      => $this->faker->paragraphs(5, true),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_post_at'   => now(),
            'is_active'    => true, // 80% de probabilidad de ser true
        ];
    }

    public function unpublished(): static
    {
        return $this->state([
            'is_active' => false
        ]);
    }
}
