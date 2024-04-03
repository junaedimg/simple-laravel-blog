<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('Home', [
            'title' => "HOME",
            'active' => "HOME"
        ]);
    }
}
