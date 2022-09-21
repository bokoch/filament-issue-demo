<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'        => $this->faker->word(),
            'content'      => $this->faker->paragraph(),
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),

            'category_id' => Category::factory(),
        ];
    }
}
