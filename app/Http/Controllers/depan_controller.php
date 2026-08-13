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

class depan_controller extends Controller
{
    //start fungsi tampil halaman home
    public function tampil_home()
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
        $HOME_INFOGRAFIS_UTAMA = home_infografis_utama::first();
        $HOME_INFOGRAFIS = home_infografis::get();
        $HOME_GALERI = home_galeri::get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.index', compact('HOME_PROFIL', 'HOME_INFOGRAFIS_UTAMA', 'HOME_INFOGRAFIS', 'HOME_GALERI'));

    }
    //end fungsi tampil halaman home

    //start fungsi tampil halaman tentang visi misi
    public function tampil_visi_misi()
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
        $TENTANG_VISIMISI_TUJUAN = tentang_visimisi_tujuan::first();
        $TENTANG_VISIMISI_STRATEGIS = tentang_visimisi_strategis::first();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.visi-misi', compact('TENTANG_VISIMISI_SEKAPURSIRIH', 'TENTANG_VISIMISI_VISI', 'TENTANG_VISIMISI_MISI', 'TENTANG_VISIMISI_TUJUAN', 'TENTANG_VISIMISI_STRATEGIS'));

    }
    //end fungsi tampil halaman tentang visi misi

    //start fungsi tampil halaman tentang struktur organisasi
    public function tampil_struktur_organisasi()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = nama_model->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = nama_model->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->first();
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->get();
        $TENTANG_STRUKTURORGANISASI = tentang_strukturorganisasi::first();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.struktur-organisasi', compact('TENTANG_STRUKTURORGANISASI'));

    }
    //end fungsi tampil halaman tentang struktur organisasi

    //start fungsi tampil halaman SPMI & AMI
        //SPMI & AMI JANGAN DULU PAKAI CONTROLER SEBELUM DINGINKAN
    //end fungsi tampil halaman SPMI & AMI

    //start fungsi tampil halaman akreditasi status akreditasi AIPT
    public function tampil_akreditasi_status_aipt()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = nama_model->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = nama_model->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->first();
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->get();
        $AKREDITASI_AIPT = akreditasi_aipt::orderBy('akreditasi_aipt_berlaku_selesai', 'desc')->get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.akreditasi-AIPT', compact('AKREDITASI_AIPT'));

    }
    //end fungsi tampil halaman akreditasi status akreditasi AIPT

    //start fungsi tampil halaman akreditasi status akreditasi internasional
    public function tampil_akreditasi_status_internasional()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = nama_model->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = nama_model->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->first();
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.akreditasi-inter-status');

    }
    //end fungsi tampil halaman akreditasi status akreditasi internasional

    //start fungsi tampil halaman akreditasi status akreditasi nasional
    public function tampil_akreditasi_status_nasional()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = DB::table('nama_tabel')->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = DB::table('nama_tabel')->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->first();
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.akreditasi-nasional-status');

    }
    //end fungsi tampil halaman akreditasi status akreditasi nasional

    //start fungsi tampil halaman akreditasi instrumen akreditasi
    public function tampil_akreditasi_instrumen_akreditasi()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = DB::table('nama_tabel')->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = DB::table('nama_tabel')->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->first();
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->get();
        $AKREDITASI_NASIONAL_INSTRUMEN = akreditasi_instrumen::where('akreditasi_instrumen_jenis', 'Nasional')->get();
        $AKREDITASI_INTERNASIONAL_INSTRUMEN = akreditasi_instrumen::where('akreditasi_instrumen_jenis', 'Internasional')->get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.akreditasi-instrumen', compact('AKREDITASI_NASIONAL_INSTRUMEN', 'AKREDITASI_INTERNASIONAL_INSTRUMEN'));

    }
    //end fungsi tampil halaman akreditasi instrumen akreditasi

    //start fungsi tampil halaman peraturan dan dokumen pos
    public function tampil_peraturan_dan_dokumen_pos()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = DB::table('nama_tabel')->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = DB::table('nama_tabel')->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->first();
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->get();
        $PERATURAN_DOKUMEN_POS = peraturan_dokumen_pos::orderBy('peraturan_dokumen_pos_nama_dokumen', 'asc')->get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.peraturan-dokumen-pos', compact('PERATURAN_DOKUMEN_POS'));

    }
    //end fungsi tampil halaman peraturan dan dokumen pos

    //start fungsi tampil halaman peraturan dan dokumen spmi
    public function tampil_peraturan_dan_dokumen_spmi()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = DB::table('nama_tabel')->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = DB::table('nama_tabel')->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->first();
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->get();
        $PERATURAN_DOKUMEN_SPMI_KEBIJAKAN = peraturan_dokumen_spmi::where('peraturan_dokumen_spmi_jenis_dokumen', 'Kebijakan')->orderBy('peraturan_dokumen_spmi_tahun_dokumen', 'desc')->get();
        $PERATURAN_DOKUMEN_SPMI_STANDAR = peraturan_dokumen_spmi::where('peraturan_dokumen_spmi_jenis_dokumen', 'Standar')->orderBy('peraturan_dokumen_spmi_tahun_dokumen', 'desc')->get();
        $PERATURAN_DOKUMEN_SPMI_MANUAL = peraturan_dokumen_spmi::where('peraturan_dokumen_spmi_jenis_dokumen', 'Manual')->orderBy('peraturan_dokumen_spmi_tahun_dokumen', 'desc')->get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.peraturan-dokumen-spmi', compact('PERATURAN_DOKUMEN_SPMI_KEBIJAKAN', 'PERATURAN_DOKUMEN_SPMI_STANDAR', 'PERATURAN_DOKUMEN_SPMI_MANUAL'));

    }
    //end fungsi tampil halaman peraturan dan dokumen spmi

    //start fungsi tampil halaman peraturan dan dokumen UU
    public function tampil_peraturan_dan_dokumen_uu()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = DB::table('nama_tabel')->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = DB::table('nama_tabel')->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->first();
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->get();
        $PERATURAN_DOKUMEN_UU = peraturan_dokumen_uu::orderBy('peraturan_dokumen_uu_tanggal_dokumen', 'desc')->get();


        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.peraturan-uu', compact('PERATURAN_DOKUMEN_UU'));

    }
    //end fungsi tampil halaman peraturan dan dokumen UU

    //start fungsi tampil halaman peraturan dan dokumen statuta
    public function tampil_peraturan_dan_dokumen_statuta()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = DB::table('nama_tabel')->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = DB::table('nama_tabel')->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->first();
        //$"variable" = DB::table('nama_tabel')->where('nama_kolom', 'nilai')->get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return view('depan.peraturan-statuta-turunan');

    }
    //end fungsi tampil halaman peraturan dan dokumen statuta

    
}
