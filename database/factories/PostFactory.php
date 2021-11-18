<?php

namespace Database\Factories;

use App\Models\Post;
use http\Message\Body;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
    	return [
    	    //
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph
    	];
    }
}
