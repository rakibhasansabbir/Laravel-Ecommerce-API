<?php

namespace Database\Factories;

use App\Models\Product;
use App\User;
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
            'name' => $this->faker->word,
            'detail' => $this->faker->paragraph,
            'image' => $this->faker->image('public/storage/images', 900, 400, 'cats', false),
            'price' => $this->faker->numberBetween(500,5500),
            'stock' => $this->faker->randomDigit,
            'discount' => $this->faker->numberBetween(2,30),
            'user_id' => function() {
                return User::all()->random();
            }
        ];
    }
}
