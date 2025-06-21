<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Ambil token dari session
        $token = session('api_token');

        // 2. Gunakan token untuk mengambil data dari API
        $response = Http::withToken($token)->get('https://ti054a01.agussbn.my.id/api/dashboard/counts');

        if ($response->failed()) {
            // Handle jika token tidak valid atau expired
            // Opsi: redirect ke logout untuk membersihkan session
            return redirect()->route('logout')->withErrors('Sesi Anda telah berakhir. Silakan login kembali.');
        }

        $data = $response->json();

        // 3. Tampilkan data ke view
        return view('dashboard', ['data' => $data]);
    }
}
