<?php

namespace Database\Factories;

use App\Models\UserPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserPost>
 */
class UserPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 30),
            'post_id' => $this->faker->numberBetween(1, 30),
        ];
    }
}
