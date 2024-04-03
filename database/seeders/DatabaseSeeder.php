<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Post::Factory(30)->create();
        Category::create([
            'name' => 'web design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'uiux',
            'slug' => 'uiux'
        ]);
        Category::create([
            'name' => 'coding',
            'slug' => 'coding'
        ]);
        // Category::Factory(5)->create();
    }
}
