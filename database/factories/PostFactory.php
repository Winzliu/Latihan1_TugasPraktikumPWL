<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// use App\Models\User;

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
        // $userIds = User::pluck('id')->toArray();
        return [
            // 'title'     => fake()->sentence(mt_rand(2, 8)),
            // 'exceprt'   => fake()->paragraph(1),
            // 'content'   => fake()->paragraph(mt_rand(3, 5)),
            // 'image'     => fake()->sentence(1),
            // 'author_id' => collect($userIds)->random()
        ];
    }
}