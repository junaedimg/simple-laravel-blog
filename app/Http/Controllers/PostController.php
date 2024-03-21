<?php

namespace App\Http\Controllers;

use App\Models\Post;
 
class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => "BLOG",
            'posts' =>  Post::with(['user', 'category'])->get()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            'title' => "POST",
            'post' => $post,
        ]);
    }
}
