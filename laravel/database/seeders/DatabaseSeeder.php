<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Mechanic::factory(30)->create();
        // \App\Models\Car::factory(30)->create();
        // \App\Models\Product::factory(30)->create();
        \App\Models\User::factory(200)->create();
        // \App\Models\Image::factory(20)->create();

        // $models = ['App\Models\Product', 'App\Models\User'];

        // for ($i = 0; $i < 50; $i++) {
        //     DB::table('product_users')->insert([
        //         'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        //         'product_id' => \App\Models\Product::inRandomOrder()->first()->id,
        //     ]);

        //     $model = $models[array_rand($models)];

        //     DB::table('all_images')->insert([
        //         'url' => fake()->imageUrl(),
        //         'imageable_id' => $model::inRandomOrder()->first()->id,
        //         'imageable_type' => $model,
        //     ]);
        // }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
