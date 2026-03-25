<?php

use Illuminate\Support\Facades\Route;

//depan
Route::get('/', function () {
    return view('depan.index');
});

//belakang
Route::get('/belakang', function () {
    return view('belakang.index');
});