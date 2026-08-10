<?php

//API AKreditasi start
use App\Http\Controllers\AkreditasiController;
Route::get('/api/akreditasi', [AkreditasiController::class, 'akreditasi']);
//API Akreditasi end

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\depan_controller;

// ==========================================
// ROUTE FRONTEND (DEPAN) - PUBLIC
// ==========================================

//under constructon
Route::get('/underconstruction', function () {
    return view('underconstruction');
})->name('perbaikan');

//depan
Route::get('/', [depan_controller::class, 'tampil_home'])->name('index');

    //tentang
    Route::get('/visi-misi', [depan_controller::class, 'tampil_visi_misi'])->name('visi-misi');
    Route::get('/struktur-organisasi', [depan_controller::class, 'tampil_struktur_organisasi'])->name('struktur-organisasi');

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

    Route::get('/siklus-spmi-laporan-prodi', function () {
        return view('depan.spmi-siklus-view-module.page.laporan-prodi');
    })->name('spmi-siklus-laporan-prodi');

    Route::get('/standar-unsri', function () {
        return view('depan.spmi-standar-unsri');
    })->name('spmi-standar-unsri');

    Route::get('/ami', function () {
        return view('depan.spmi-ami');
    })->name('spmi-ami');

    //akreditasi
    Route::get('/akreditas-aipt', [depan_controller::class, 'tampil_akreditasi_status_aipt'])->name('akreditasi-AIPT');
    Route::get('/akreditas-status', [depan_controller::class, 'tampil_akreditasi_status_nasional'])->name('akreditasi-nasional-status');
    Route::get('/akreditas-inter-status', [depan_controller::class, 'tampil_akreditasi_status_internasional'])->name('akreditasi-inter-status');
    Route::get('/akreditas-instrumen', [depan_controller::class, 'tampil_akreditasi_instrumen_akreditasi'])->name('akreditasi-instrumen');

    //peraturan dan dokumen
    Route::get('/peraturan-dokumen-POS', [depan_controller::class, 'tampil_peraturan_dan_dokumen_pos'])->name('pos');
    Route::get('/peraturan-dokumen-spmi', [depan_controller::class, 'tampil_peraturan_dan_dokumen_spmi'])->name('spmi');
    Route::get('/peraturan-dan-undang-undang', [depan_controller::class, 'tampil_peraturan_dan_dokumen_uu'])->name('peraturan-uu');
    Route::get('/statuta-dan-peraturan-turunan-statuta', [depan_controller::class, 'tampil_peraturan_dan_dokumen_statuta'])->name('peraturan-statuta-turunan');

// ==========================================
// ROUTE FRONTEND (belakang) - dudu login
// ==========================================
//belakang
Route::get('/belakang', function () {
    return view('belakang.index');
})->name('belakang');

Route::get('/belakang/pintu', function () {
    return view('belakang.pintu');
})->name('belakang-pintu');

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

//SPMI AMI start
    //SPMI-AMI-edit-Tentang SPMI
    Route::get('/belakang/website/SPMI-AMI/edit-tentang-SPMI', function () {
    return view('belakang.website.SPMI-AMI.SPMI-AMI-edit-tentang');
    })->name('SPMI-AMI-edit-tentang');

    //SPMI-AMI-edit-strategi-lingkup
    Route::get('/belakang/website/SPMI-AMI/edit-strategi-lingkup', function () {
    return view('belakang.website.SPMI-AMI.SPMI-AMI-edit-strategi-lingkup');
    })->name('SPMI-AMI-edit-strategi-lingkup');

    //SPMI-AMI-edit-siklus-SPMI
    Route::get('/belakang/website/SPMI-AMI/edit-siklus-SPMI', function () {
    return view('belakang.website.SPMI-AMI.SPMI-AMI-edit-siklus-SPMI');
    })->name('SPMI-AMI-edit-siklus-SPMI');

    //SPMI-AMI-edit-standar-UNSRI
    Route::get('/belakang/website/SPMI-AMI/edit-standar-UNSRI', function () {
    return view('belakang.website.SPMI-AMI.SPMI-AMI-edit-standar-UNSRI');
    })->name('SPMI-AMI-edit-standar-UNSRI');

    //SPMI-AMI-edit-AMI
    Route::get('/belakang/website/SPMI-AMI/edit-AMI', function () {
    return view('belakang.website.SPMI-AMI.SPMI-AMI-edit-AMI');
    })->name('SPMI-AMI-edit-AMI');