<?php

use Illuminate\Support\Facades\Route;

//depan
Route::get('/', function () {
    return view('depan.index');
})->name('index');

Route::get('/visi-misi', function () {
    return view('depan.visi-misi');
})->name('visi-misi');

Route::get('/struktur-organisasi', function () {
    return view('depan.struktur-organisasi');
})->name('struktur-organisasi');

//belakang
Route::get('/belakang', function () {
    return view('belakang.index');
});