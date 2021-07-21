<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this -> faker -> name(20),
            'description'=> $this->faker->text(300),
            'price'=>$this->faker->randomNumber([10000,50000,100000]),
            'user_id'=> User::all()->random()->id,
            'category_id'=> Category::all()->random()->id,
            'img'=>$this->faker->text(10)
        ];
    }
}
