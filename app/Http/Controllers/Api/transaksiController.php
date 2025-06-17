<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\transaksi;

class transaksiController extends Controller {

    public function index()
    {
        $data = \App\Models\transaksi::all();

        if ($data->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi tidak ditemukan',
                'data' => []
            ], 200); // atau bisa pakai 204 jika ingin tanpa konten

        }

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diambil',
            'data' => $data
        ], 200);

    }

    public function show($id)
    {
        $transaksi = transaksi::find($id);

        if (!$transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diambil',
            'data' => $transaksi
        ], 200);

    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_transaksi' => 'required|integer',
            'no_registrasi' => 'required|integer',
            'tanggal_bayar' => 'required|date',
            'total_tagihan' => 'required|numeric',
            'status' => 'required|integer',
        ]);

        // Simpan data ke database
        $transaksi = transaksi::create($validatedData);

        // Kembalikan response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $transaksi
        ], 201);

    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_transaksi' => 'required|integer',
            'no_registrasi' => 'required|integer',
            'tanggal_bayar' => 'required|date',
            'total_tagihan' => 'required|numeric',
            'status' => 'required|integer',
        ]);

        // Temukan data berdasarkan ID
        $transaksi = transaksi::find($id);

        if (!$transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi tidak ditemukan',
            ], 404);

        }

        // Update data
        $transaksi->update($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $transaksi
        ], 200);

    }

    public function destroy($id)
    {
        $transaksi = transaksi::find($id);

        if (!$transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi tidak ditemukan',
            ], 404);

        }

        $transaksi->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus',
            ], 200);

    }

}
