<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function create(){
        return view("auth.register");
    }
    public function store(){
        $validatedFields = request()->validate([
            'email' => "required|email|unique:users,email",
            'password' => "required",
            'name' => "required"
        ]);

        $user = User::create($validatedFields);
        Auth::login($user);
        return redirect("");
    }
}
