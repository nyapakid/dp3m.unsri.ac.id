<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AkreditasiController extends Controller
{
    public function akreditasi()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.akreditasi.token'),
            'Accept' => 'application/json',
        ])->get(config('services.akreditasi.url'));

        return response()->json(
            $response->json(),
            $response->status()
        );
    }
}