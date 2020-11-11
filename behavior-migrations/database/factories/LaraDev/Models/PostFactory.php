<?php

namespace Database\Factories\LaraDev\Models;

use Illuminate\Support\Str;
use LaraDev\Models\Categories;
use LaraDev\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(10);

        return [
            'title'=> $title,
            'slug'=> Str::slug($title),
            'subtitle'=> $this->faker->sentence(10),
            'description'=> $this->faker->paragraph(5),
            'publish_at'=> $this->faker->dateTime()
        ];
    }
}
