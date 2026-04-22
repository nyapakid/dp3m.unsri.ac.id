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
    Route::get('/peraturan-dokumen-spmi', function () {
        return view('depan.peraturan-dokumen-spmi');
    })->name('spmi');

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


//belakang
Route::get('/belakang', function () {
    return view('belakang.index');
})->name('belakang');

//home start
    //home-edit-banner-slide
    Route::get('/belakang/website/home/edit-slide-banner', function () {
    return view('belakang.website.home.home-edit-slide-banner');
    })->name('home-edit-slide-banner');

        //home-page-edit-banner-slide
        Route::get('/belakang/website/home/edit-slide-banner/page-edit-banner', function () {
        return view('belakang.website.home.home-page-edit-banner');
        })->name('home-page-edit-banner');

        //home-page-tambah-banner-slide
        Route::get('/belakang/website/home/edit-slide-banner/page-tambah-banner', function () {
        return view('belakang.website.home.home-page-tambah-banner');
        })->name('home-page-tambah-banner');

    //home-edit-profile
    Route::get('/belakang/website/home/edit-profile', function () {
    return view('belakang.website.home.home-edit-profile');
    })->name('home-edit-profile');

        //home-page-edit-profile
        Route::get('/belakang/website/home/edit-profile/page-edit-profile', function () {
        return view('belakang.website.home.home-page-edit-profile');
        })->name('home-page-edit-profile');

    //home-edit-infografis
    Route::get('/belakang/website/home/edit-infografis', function () {
    return view('belakang.website.home.home-edit-infografis');
    })->name('home-edit-infografis');

        //home-page-edit-infografis
        Route::get('/belakang/website/home/edit-infografis/page-edit-infografis', function () {
        return view('belakang.website.home.home-page-edit-infografis');
        })->name('home-page-edit-infografis');

        //home-page-tambah-infografis
        Route::get('/belakang/website/home/edit-infografis/page-tambah-infografis', function () {
        return view('belakang.website.home.home-page-tambah-infografis');
        })->name('home-page-tambah-infografis');

    //home-edit-galery
    Route::get('/belakang/website/home/edit-galery', function () {
    return view('belakang.website.home.home-edit-galery');
    })->name('home-edit-galery');

        //home-page-edit-galery
        Route::get('/belakang/website/home/edit-galery/page-edit-galery', function () {
        return view('belakang.website.home.home-page-edit-galery');
        })->name('home-page-edit-galery');

        //home-page-tambah-galery
        Route::get('/belakang/website/home/edit-galery/page-tambah-galery', function () {
        return view('belakang.website.home.home-page-tambah-galery');
        })->name('home-page-tambah-galery');
//home end

//tentang start
    //tentant-edit-visi-misi
    Route::get('/belakang/website/tentang/edit-visi-misi-tujuan-startegi', function () {
    return view('belakang.website.tentang.tentang-edit-visi-misi');
    })->name('tentang-edit-visi-misi');

    //tentant-edit-struktur-organisasi
    Route::get('/belakang/website/tentang/edit-struktur-organisasi', function () {
    return view('belakang.website.tentang.tentang-edit-struktur-organisasi');
    })->name('tentang-edit-struktur-organisasi');