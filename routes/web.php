<?php

use Illuminate\Support\Facades\Route;

//depan
Route::get('/', function () {
    return view('welcome');
});

//belakang
Route::get('/belakang', function () {
    return view('belakang.index');
});