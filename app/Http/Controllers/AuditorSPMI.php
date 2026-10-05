<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AuditorSPMI extends Controller
{
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

        } catch (\Throwable $e) {

            return view('depan.spmi-siklus', [
                'auditors' => [],
                'error' => $e->getMessage(),
            ]);
        }
    }
}