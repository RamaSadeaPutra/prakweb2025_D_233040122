<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

// Import model yang dibutuhkan
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Membuat judul dan slug unik
        $title = $this->faker->sentence(4);

        return [
            // Membuat user_id baru secara otomatis dengan factory User
            'user_id' => User::factory(), 
            
            // Membuat category_id baru secara otomatis dengan factory Category
            'category_id' => Category::factory(),
            
            'title' => $title,
            
            // Menggunakan helper Str::slug untuk mengubah judul menjadi URL-friendly slug
            'slug' => Str::slug($title),
            
            // Menggunakan faker untuk membuat teks acak
            'excerpt' => $this->faker->paragraph(),
            
            // Membuat 3 paragraf, diubah menjadi string dengan <p> (true)
            'body' => $this->faker->paragraphs(3, true),
            
            'image' => null,
        ];
    }
}