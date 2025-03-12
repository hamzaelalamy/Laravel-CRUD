<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [NinjaController::class, 'index'])->name('users.index');
Route::get('/users/create', [NinjaController::class, 'create'])->name('users.create');
Route::get('/users/{id}', [NinjaController::class, 'show'])->name('users.show');