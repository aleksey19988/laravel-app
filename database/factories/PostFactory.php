<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->text(100),
            'image' => $this->faker->imageUrl,
            'likes' => random_int(0, 1000),
            'is_published' => true,
            'category_id' => Category::query()->get()->random()->id,
        ];
    }
}
