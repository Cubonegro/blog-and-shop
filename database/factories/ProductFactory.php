<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(10),
            'description'=>$this->faker->text(100),
            'preview'=>$this->faker->text(50),
            'file'=>$this->faker->text(50),
            'price'=>intval($this->faker->randomElement(['10000','50000','100000'])),
            'user_id'=> User::all()->random()->id,
            'category_id'=> Category::all()->random()->id
        ];
}
}