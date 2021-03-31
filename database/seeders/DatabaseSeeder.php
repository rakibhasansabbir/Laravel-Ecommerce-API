<?php

namespace Database\Seeders;

use App\User;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::factory(10)->create();
        Product::factory(100)->create();
        Review::factory(500)->create();
    }
}
