<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Gunakan Laravel HTTP Client
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $response = Http::post('https://ti054a01.agussbn.my.id/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->failed()) {
            throw ValidationException::withMessages([
                'email' => ['Kredensial yang diberikan tidak cocok dengan catatan kami.'],
            ]);
        }

        $data = $response->json();

        session([
            'api_token' => $data['access_token'],
        ]);

        return redirect()->intended('/dashboard');
    }
    public function destroy(Request $request)
    {
        $token = session('api_token');

        if ($token) {
            Http::withToken($token)->post('https://ti054a01.agussbn.my.id/api/logout');
        }

        $request->session()->flush();

        return redirect('/login');
    }
}
