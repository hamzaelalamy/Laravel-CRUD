<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [NinjaController::class, 'index'])->name('users.index');
Route::get('/users/create', [NinjaController::class, 'create'])->name('users.create');
Route::get('/users/{user}', [NinjaController::class, 'show'])->name('users.show');
Route::post('/users', [NinjaController::class, 'store'])->name('users.store');
Route::delete('/users/{user}', [NinjaController::class, 'destroy'])->name('users.destroy');