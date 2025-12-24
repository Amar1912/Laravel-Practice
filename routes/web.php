<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('user', [UserController::class, 'getUser']);
Route::get('profile', [UserController::class, 'getProfile']);
Route::get('username/{name}', [UserController::class, 'getusername']);

 Route::get('/home', function () {
     return view('home');
 });
//Route::view('/home', 'home');   
Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});