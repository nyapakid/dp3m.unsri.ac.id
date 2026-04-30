<?php

use Illuminate\Support\Facades\Route;

//under constructon
Route::get('/underconstruction', function () {
    return view('underconstruction');
})->name('perbaikan');

//depan
Route::get('/', function () {
    return view('depan.index');
})->name('index');

    //tentang
    Route::get('/visi-misi', function () {
        return view('depan.visi-misi');
    })->name('visi-misi');

    Route::get('/struktur-organisasi', function () {
        return view('depan.struktur-organisasi');
    })->name('struktur-organisasi');

    //SPMI
    Route::get('/tentang-spmi', function () {
        return view('depan.spmi-tentang');
    })->name('spmi-tentang');

    Route::get('/strategi-lingkup-spmi', function () {
        return view('depan.spmi-startegi-lingkup');
    })->name('spmi-strategi-lingkup');

    Route::get('/siklus-spmi', function () {
        return view('depan.spmi-siklus');
    })->name('spmi-siklus');

    Route::get('/standar-unsri', function () {
        return view('depan.spmi-standar-unsri');
    })->name('spmi-standar-unsri');

    Route::get('/ami', function () {
        return view('depan.spmi-ami');
    })->name('spmi-ami');

    //akreditasi
    Route::get('/akreditas-aipt', function () {
        return view('depan.akreditasi-AIPT');
    })->name('akreditasi-AIPT');

    Route::get('/akreditas-status', function () {
        return view('depan.akreditasi-nasional-status');
    })->name('akreditasi-nasional-status');

    Route::get('/akreditas-inter-status', function () {
        return view('depan.akreditasi-inter-status');
    })->name('akreditasi-inter-status');

    Route::get('/akreditas-instrumen', function () {
        return view('depan.akreditasi-instrumen');
    })->name('akreditasi-instrumen');

    //peraturan dan dokumen
    Route::get('/peraturan-dokumen-spmi', function () {
        return view('depan.peraturan-dokumen-spmi');
    })->name('spmi');

    Route::get('/peraturan-dan-undang-undang', function () {
        return view('depan.peraturan-uu');
    })->name('peraturan-uu');

    Route::get('/statuta-dan-peraturan-turunan-statuta', function () {
        return view('depan.peraturan-statuta-turunan');
    })->name('peraturan-statuta-turunan');


//belakang
Route::get('/belakang', function () {
    return view('belakang.index');
})->name('belakang');

//home
    //home-edit-banner
    Route::get('/belakang/website/home/edit-banner', function () {
    return view('belakang.website.home.home-edit-banner');
    })->name('home-edit-banner');

    //home-edit-profile
    Route::get('/belakang/website/home/edit-profile', function () {
    return view('belakang.website.home.home-edit-profile');
    })->name('home-edit-profile');

    //home-edit-infografis
    Route::get('/belakang/website/home/edit-infografis', function () {
    return view('belakang.website.home.home-edit-infografis');
    })->name('home-edit-infografis');

    //home-edit-gallery
    Route::get('/belakang/website/home/edit-gallery', function () {
    return view('belakang.website.home.home-edit-gallery');
    })->name('home-edit-gallery');

//tentang start
    //tentant-edit-visi-misi
    Route::get('/belakang/website/tentang/edit-visi-misi-tujuan-startegi', function () {
    return view('belakang.website.tentang.tentang-edit-visi-misi');
    })->name('tentang-edit-visi-misi');

    //tentant-edit-struktur-organisasi
    Route::get('/belakang/website/tentang/edit-struktur-organisasi', function () {
    return view('belakang.website.tentang.tentang-edit-struktur-organisasi');
    })->name('tentang-edit-struktur-organisasi');