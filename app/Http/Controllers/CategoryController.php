<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => "CATEGORIES",
            'active' => "CATEGORIES",
            'categories' => Category::all()
        ]);
    }
}
