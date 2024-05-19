<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/page', function () {
    return view('page');
});


Route::get("register",[RegisterController::class,"create"]);
Route::post("register",[RegisterController::class,"store"])->name("register");

Route::get("/login",[SessionController::class,"create"]);
Route::post("/login",[SessionController::class,"store"])->name("login");

Route::post("/destroy",[SessionController::class,"destroy"]);


