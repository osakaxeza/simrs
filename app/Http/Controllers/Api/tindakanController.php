<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tindakan;

class tindakanController extends Controller {

    public function index()
    {
        $data = \App\Models\tindakan::all();

        if ($data->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tindakan tidak ditemukan',
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
        $tindakan = tindakan::find($id);

        if (!$tindakan) {
            return response()->json([
                'success' => false,
                'message' => 'Data tindakan tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diambil',
            'data' => $tindakan
        ], 200);

    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_tindakan' => 'required|integer',
            'nama_tindakan' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'id_poli' => 'required|integer',
        ]);

        // Simpan data ke database
        $tindakan = tindakan::create($validatedData);

        // Kembalikan response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $tindakan
        ], 201);

    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_tindakan' => 'required|integer',
            'nama_tindakan' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'id_poli' => 'required|integer',
        ]);

        // Temukan data berdasarkan ID
        $tindakan = tindakan::find($id);

        if (!$tindakan) {
            return response()->json([
                'success' => false,
                'message' => 'Data tindakan tidak ditemukan',
            ], 404);

        }

        // Update data
        $tindakan->update($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $tindakan
        ], 200);

    }

    public function destroy($id)
    {
        $tindakan = tindakan::find($id);

        if (!$tindakan) {
            return response()->json([
                'success' => false,
                'message' => 'Data tindakan tidak ditemukan',
            ], 404);

        }

        $tindakan->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus',
            ], 200);

    }

}
