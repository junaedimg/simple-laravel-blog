<?php

namespace App\Http\Controllers;
use App\models\Post;


class BlogController extends Controller
{
    public function index()
    {
        return view('blog',[
            'title'=> "BLOG",
            'posts'=> Post::all()
        ]);
    }
}
