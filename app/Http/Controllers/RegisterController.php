<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index", [

            "active" => 'Login',
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  request()->validate([
            "name" => "required|min:3|max:255",
            "email" => "required|min:3|max:255|email:rfc,dns|unique:users",
            "password" => "required|min:8",
            "username" => ["required", "min:5", "max:255", "unique:users"]
        ]);
        User::create($validatedData);
        // session()->flash('status', 'Registration Successful');
        // return redirect("/login");
        return redirect("/login")->with('status', 'Registration Successful');
    }
}
