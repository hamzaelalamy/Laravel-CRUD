<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [NinjaController::class, 'index']);
Route::get('/users/create', [NinjaController::class, 'create']);

Route::get('/users/{id}', [NinjaController::class, 'show']);