<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);

// Route::get('/categories/{categories}', [CategoriesController::class, 'index']);
// Route::get('/post/{post:slug}', [PostController::class, 'post']);
//     return view('category', [
//         'title' => "CATEGORY",
//         'category' => Category::where('id', $category)->first()->name,
//         'posts' => Post::where('category_id', $category)->get()
//     ]);
// });

// Route::get('/categories', function () {
//     return view('categories', [
//         'title' => "CATEGORIES",
//         'categories' => Category::all(),
//     ]);
// });

// Route::get('/author/{user:username}', function ($user) {
//     return view('user', [
//         'title' => "AUTHOR",
//         'posts' => Post::where('user_id', $user)->get()
//     ]);
// });
