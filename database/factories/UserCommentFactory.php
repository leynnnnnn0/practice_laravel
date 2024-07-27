<?php

namespace Database\Factories;

use App\Models\UserComment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserComment>
 */
class UserCommentFactory extends Factory
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
            'comment_id' => $this->faker->numberBetween(1, 30),
        ];
    }
}
