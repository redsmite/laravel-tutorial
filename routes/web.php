<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
<<<<<<< HEAD
});

Route::post('/register', function () {
    return 'thank you';
=======
>>>>>>> f9485d1cda22cc8aac8e08cb4ff57c149a0d8bb3
});

Route::post('/register', [UserController::class, 'register']);
