<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\spmi_sk_lampau;

class AuditorSPMI extends Controller
{
    // Mengambil data SK dan ST dari database
    public function tampil_sk_lampau()
    {
        $get_data_SK = spmi_sk_lampau::where(
            'siklus_spmi_sk_lampau_lebel',
            'SK'
        )
        ->orderBy('siklus_spmi_sk_lampau_tahun', 'desc')
        ->get();

        $get_data_ST = spmi_sk_lampau::where(
            'siklus_spmi_sk_lampau_lebel',
            'ST'
        )
        ->orderBy('siklus_spmi_sk_lampau_tahun', 'desc')
        ->get();

        // Gunakan nama variabel yang sesuai dengan Blade
        return [
            'tampil_data_sk' => $get_data_SK,
            'tampil_data_st' => $get_data_ST,
        ];
    }

    // Halaman utama SPMI
    public function index()
    {
        $username = 'spmi_api';
        $password = 'spmi_api@!!098';

        // Ambil data SK dan ST sebelum return view
        $dataSKLampau = $this->tampil_sk_lampau();

        // Data default untuk halaman
        $viewData = array_merge($dataSKLampau, [
            'auditors' => [],
            'error' => null,
        ]);

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
                $viewData['error'] =
                    'Gagal mengambil data auditor. HTTP '
                    . $response->status();

                return view('depan.spmi-siklus', $viewData);
            }

            $result = $response->json();

            // Ambil data auditor dari API
            $auditors = $result['data'] ?? [];

            // Sorting nama auditor A-Z
            $auditors = collect($auditors)
                ->sortBy(function ($auditor) {
                    return $auditor['dosen']['nama'] ?? '';
                })
                ->values()
                ->all();

            $viewData['auditors'] = $auditors;

            return view('depan.spmi-siklus', $viewData);

        } catch (\Throwable $e) {
            $viewData['error'] = $e->getMessage();

            return view('depan.spmi-siklus', $viewData);
        }
    }
}
