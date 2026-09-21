<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_profil_dp3m;
use App\Models\home_infografis_utama;
use App\Models\home_infografis;
use App\Models\home_galeri;
use App\Models\tentang_visimisi_sekapursirih;
use App\Models\tentang_visimisi_visi;
use App\Models\tentang_visimisi_misi;
use App\Models\tentang_visimisi_tujuan;
use App\Models\tentang_visimisi_strategis;
use App\Models\tentang_strukturorganisasi;
use App\Models\akreditasi_aipt;
use App\Models\akreditasi_instrumen;
use App\Models\peraturan_dokumen_pos;
use App\Models\peraturan_dokumen_spmi;
use App\Models\peraturan_dokumen_uu;
use App\Models\peraturan_dokumen_statuta_view;
use App\Models\peraturan_dokumen_statuta_tabel;

class belakang_controller extends Controller
{
    public function edit_home_profile()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = nama_model->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = nama_model->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->first();
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->get();
        $HOME_PROFIL = home_profil_dp3m::first();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('belakang.website.home.home-edit-profile', compact('HOME_PROFIL'));

    }

    public function edit_home_infografis()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = nama_model->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = nama_model->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->first();
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->get();
        $HOME_INFOGRAFIS_UTAMA = home_infografis_utama::first();
        $HOME_INFOGRAFIS = home_infografis::get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('belakang.website.home.home-edit-infografis', compact('HOME_INFOGRAFIS_UTAMA', 'HOME_INFOGRAFIS'));

    }

    public function edit_home_gallery()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = nama_model->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = nama_model->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->first();
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->get();
        $HOME_GALERI = home_galeri::get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('belakang.website.home.home-edit-gallery', compact('HOME_GALERI'));

    }

    public function edit_visi_misi()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = nama_model->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = nama_model->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->first();
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->get();
        $TENTANG_VISIMISI_SEKAPURSIRIH = tentang_visimisi_sekapursirih::first();
        $TENTANG_VISIMISI_VISI = tentang_visimisi_visi::first();
        $TENTANG_VISIMISI_MISI = tentang_visimisi_misi::first();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('belakang.website.tentang.tentang-edit-visi-misi', compact('TENTANG_VISIMISI_SEKAPURSIRIH', 'TENTANG_VISIMISI_VISI', 'TENTANG_VISIMISI_MISI'));

    }

}
