<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tindakan_transaksi;

class tindakan_transaksiController extends Controller {

    public function index()
    {
        $data = \App\Models\tindakan_transaksi::all();

        if ($data->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi tindakan tidak ditemukan',
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
        $tindakan_transaksi = tindakan_transaksi::find($id);

        if (!$tindakan_transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi tindakan tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diambil',
            'data' => $tindakan_transaksi
        ], 200);

    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_transaksi' => 'required|integer',
            'id_tindakan' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        // Simpan data ke database
        $tindakan_transaksi = tindakan_transaksi::create($validatedData);

        // Kembalikan response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $tindakan_transaksi
        ], 201);

    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_transaksi' => 'required|integer',
            'id_tindakan' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        // Temukan data berdasarkan ID
        $tindakan_transaksi = tindakan_transaksi::find($id);

        if (!$tindakan_transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi tindakan tidak ditemukan',
            ], 404);

        }

        // Update data
        $tindakan_transaksi->update($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $tindakan_transaksi
        ], 200);

    }

    public function destroy($id)
    {
        $tindakan_transaksi = tindakan_transaksi::find($id);

        if (!$tindakan_transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi tindakan tidak ditemukan',
            ], 404);

        }

        $tindakan_transaksi->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus',
            ], 200);

    }

}
