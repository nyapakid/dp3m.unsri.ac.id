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

//belakang
Route::get('/belakang', function () {
    return view('belakang.index');
});