<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = [
        ["name" => "John Doe", "email" => "doe@m.c", "id" => "1", "skill" => 64 ],
        ["name" => "Jane Doe", "email" => "jane@m.c", "id" => "2", "skill" => 74 ]        
    ];

    return view('users.index', ["greeting" => "hello", "users" => $users]);
});
Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/users/{id}', function ($id) {
    //fetch record with id
    return view('users.show', ["id" => $id]);
});