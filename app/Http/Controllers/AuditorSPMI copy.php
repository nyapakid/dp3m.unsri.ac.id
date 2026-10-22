<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\spmi_sk_lampau;

class AuditorSPMI extends Controller
{
    //start fungsi tampil halaman home
    public function tampil_sk_lampau()
    //satu halaman 1 fungsi, jadi buat fungsi baru untuk setiap halaman
    //buat fungsi baru kalau untuk halaman berikutnya
    {
        //tambah dibawah ini

        $get_data_SK = spmi_sk_lampau::where('siklus_spmi_sk_lampau_lebel', 'SK')->orderBy('siklus_spmi_sk_lampau_tahun', 'desc')->get();
        $get_data_ST = spmi_sk_lampau::where('siklus_spmi_sk_lampau_lebel', 'ST')->orderBy('siklus_spmi_sk_lampau_tahun', 'desc')->get();


        //tambah terus kebawah untuk module berikutnya copy dari sebelumnya
        //$"variable" = nama_model->first(); <-- kondisi apabila dalam 1 div hanya menampilkan 1 data
        //$"variable" = nama_model->get(); <-- kondisi apabila dalam 1 div menampilkan banyak data
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->first();
        //$"variable" = nama_model->where('nama_kolom', 'nilai')->get();

        //dibagian compac setelah variabel sebelumnya tambahkan dengan "," koma lalu spasi lalu nama variabel baru
        // return view('depan.index', compact('variable1', 'variable2', 'variable3'));
        return compact('get_data_SK', 'get_data_ST');
    }
    //end fungsi tampil halaman home

    public function index()
    {
        $username = 'spmi_api';
        $password = 'spmi_api@!!098';

        try {

            $response = Http::timeout(60)
                ->acceptJson()
                ->post(
                    'https://spmi.unsri.ac.id/api/admin/auditor',
                    [
                        'username' => $username,
                        'password' => $password,
                        'per_page' => 100,
                    ]
                );

            if ($response->failed()) {
                return view('depan.spmi-siklus', [
                    'auditors' => [],
                    'error' => 'Gagal mengambil data auditor. HTTP ' . $response->status(),
                ]);
            }

            $result = $response->json();

            // Ambil data auditor
            $auditors = $result['data'] ?? [];

            // ==========================================
            // SORTING NAMA AUDITOR A-Z
            // ==========================================
            $auditors = collect($auditors)
                ->sortBy(function ($auditor) {
                    return $auditor['dosen']['nama'] ?? '';
                })
                ->values()
                ->all();

            return view('depan.spmi-siklus', [
                'auditors' => $auditors,
                'error' => null,
            ]);

        [$get_data_SK, $get_data_ST] = $this->tampil_sk_lampau();

        } catch (\Throwable $e) {

            return view('depan.spmi-siklus', [
                'auditors' => [],
                'error' => $e->getMessage(),
                'tampil_data_sk' => $get_data_SK,
                'tampil_data_st' => $get_data_ST,
            ]);
        }
    }
}