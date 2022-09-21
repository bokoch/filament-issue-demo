<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'content'    => $this->faker->paragraph(),
            'author'     => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'post_id' => Post::factory(),
        ];
    }
}
