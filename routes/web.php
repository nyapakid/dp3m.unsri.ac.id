<?php

use Illuminate\Support\Facades\Route;

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

    //akreditasi
    Route::get('/akreditas-status', function () {
        return view('depan.akreditasi-nasional-status');
    })->name('akreditasi-nasional-status');

        //banPT
        Route::get('/akreditasi-banpt', function () {
            return view('depan.akreditasi-nasional-banpt');
        })->name('akreditasi-nasional-banpt');

        Route::get('/akreditasi-banpt/instrumen-akreditasi-banpt', function () {
            return view('depan.akreditasi-nasional-banpt-instrumen-akreditasi');
        })->name('akreditasi-nasional-banpt-instrumen-akreditasi');

        Route::get('/akreditasi-banpt/instrumen-akreditasi-banpt', function () {
            return view('depan.akreditasi-nasional-banpt-instrumen-akreditasi');
        })->name('akreditasi-nasional-banpt-instrumen-akreditasi');

        Route::get('/akreditasi-banpt/instrumen-suplemen-konversi', function () {
            return view('depan.akreditasi-nasional-banpt-instrumen-suplemen-konversi');
        })->name('akreditasi-nasional-banpt-instrumen-suplemen-konversi');

        Route::get('/akreditasi-banpt/instrumen-suplemen-konversi', function () {
            return view('depan.akreditasi-nasional-banpt-instrumen-suplemen-konversi');
        })->name('akreditasi-nasional-banpt-instrumen-suplemen-konversi');

        Route::get('/akreditasi-banpt/pemantauan-evaluasi-peringkat', function () {
            return view('depan.akreditasi-nasional-banpt-pemantauan-evaluasi-peringkat');
        })->name('akreditasi-nasional-banpt-pemantauan-evaluasi-peringkat');

        Route::get('/akreditasi-banpt/pemantauan-evaluasi-peringkat', function () {
            return view('depan.akreditasi-nasional-banpt-pemantauan-evaluasi-peringkat');
        })->name('akreditasi-nasional-banpt-pemantauan-evaluasi-peringkat');

        Route::get('/akreditasi-banpt/pembukaan-prodi', function () {
            return view('depan.akreditasi-nasional-banpt-pembukaan-prodi');
        })->name('akreditasi-nasional-banpt-pembukaan-prodi');

        //LAM-PTKes
        Route::get('/akreditasi-lamptkes', function () {
            return view('depan.akreditasi-nasional-lamptkes');
        })->name('akreditasi-nasional-lamptkes');

        Route::get('/akreditasi-lamptkes', function () {
            return view('depan.akreditasi-nasional-lamptkes');
        })->name('akreditasi-nasional-lamptkes');

        Route::get('/akreditasi-lamptkes/instrumen-akreditasi', function () {
            return view('depan.akreditasi-nasional-lamptkes-instrumen-akreditasi');
        })->name('akreditasi-nasional-lamptkes-instrumen-akreditasi');

        Route::get('/akreditasi-lamptkes/informasi-surveilans', function () {
            return view('depan.akreditasi-nasional-lamptkes-informasi-surveilans');
        })->name('akreditasi-nasional-lamptkes-informasi-surveilans');


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