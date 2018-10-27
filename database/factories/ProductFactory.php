<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'image' => $faker->imageUrl(900, 400, 'cats', true, 'Faker'),
        'price' => $faker->numberBetween(500,5500),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30),
        'user_id' => function(){
            return User::all()->random();
        }
    ];
});
