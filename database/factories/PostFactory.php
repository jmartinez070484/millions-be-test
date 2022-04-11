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
    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'user_id' => rand(1,2),
            'title' => $this->faker->text(100),
            'slug' => $this->faker->slug(),
            'image' => 'default.jpg',
            'content' => $this->faker->sentence(500)
        ];
    }
}
