<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Buat 5 Users (menggunakan Factory)
        User::factory(5)->create();

        // 2. Buat 2 Categories (manual)
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // 3. Buat 10 Posts (menggunakan Factory)
        // Asumsikan Post Factory sudah mengaitkan secara acak user_id dan category_id
        Post::factory(10)->create();
    }
}