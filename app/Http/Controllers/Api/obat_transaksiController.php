<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\obat_transaksi;

class obat_transaksiController extends Controller {

    public function index()
    {
        $data = \App\Models\obat_transaksi::all();

        if ($data->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi obat tidak ditemukan',
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
        $obat_transaksi = obat_transaksi::find($id);

        if (!$obat_transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi obat tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diambil',
            'data' => $obat_transaksi
        ], 200);

    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_transaksi' => 'required|integer',
            'id_obat' => 'required|string',
            'jumlah' => 'required|integer',
            'total_harga' => 'required|numeric',
            'id_resep' => 'required|integer',
        ]);

        // Simpan data ke database
        $obat_transaksi = obat_transaksi::create($validatedData);

        // Kembalikan response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $obat_transaksi
        ], 201);

    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_transaksi' => 'required|integer',
            'id_obat' => 'required|string',
            'jumlah' => 'required|integer',
            'total_harga' => 'required|numeric',
            'id_resep' => 'required|integer',
        ]);

        // Temukan data berdasarkan ID
        $obat_transaksi = obat_transaksi::find($id);

        if (!$obat_transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi obat tidak ditemukan',
            ], 404);

        }

        // Update data
        $obat_transaksi->update($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $obat_transaksi
        ], 200);

    }

    public function destroy($id)
    {
        $obat_transaksi = obat_transaksi::find($id);

        if (!$obat_transaksi) {
            return response()->json([
                'success' => false,
                'message' => 'Data transaksi obat tidak ditemukan',
            ], 404);

        }

        $obat_transaksi->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus',
            ], 200);

    }

}
