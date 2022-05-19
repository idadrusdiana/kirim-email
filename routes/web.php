<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\emailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendemail', [emailController::class, 'index']);