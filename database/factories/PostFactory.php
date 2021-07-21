<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        return [
            'title'=> $this -> faker -> name(20),
            'body'=> $this->faker->sentence(50),
            'user_id'=> User::all()->random()->id,
            'banner'=> $this->faker->text(50),
            'category_id'=> Category::all()->random()->id,
            'type' => $this -> faker -> word(3)
        ];
    }
}
