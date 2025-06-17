<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kasir_user;

class kasir_userController extends Controller {

    public function index()
    {
        $data = \App\Models\kasir_user::all();

        if ($data->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data user kasir tidak ditemukan',
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
        $kasir_user = kasir_user::find($id);

        if (!$kasir_user) {
            return response()->json([
                'success' => false,
                'message' => 'Data user kasir tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diambil',
            'data' => $kasir_user
        ], 200);

    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_user' => 'required|integer',
            'username' => 'required|string|max:255',
            'password' => 'required|string',
            'role' => 'required|string|in:admin,petugas_kasir',
        ]);

        // Simpan data ke database
        $kasir_user = kasir_user::create($validatedData);

        // Kembalikan response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $kasir_user
        ], 201);

    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_user' => 'required|integer',
            'username' => 'required|string|max:255',
            'password' => 'required|string',
            'role' => 'required|string|in:admin,petugas_kasir',
        ]);

        // Temukan data berdasarkan ID
        $kasir_user = kasir_user::find($id);

        if (!$kasir_user) {
            return response()->json([
                'success' => false,
                'message' => 'Data user kasir tidak ditemukan',
            ], 404);

        }

        // Update data
        $kasir_user->update($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $kasir_user
        ], 200);

    }

    public function destroy($id)
    {
        $kasir_user = kasir_user::find($id);

        if (!$kasir_user) {
            return response()->json([
                'success' => false,
                'message' => 'Data user kasir tidak ditemukan',
            ], 404);

        }

        $kasir_user->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus',
            ], 200);

    }

}
