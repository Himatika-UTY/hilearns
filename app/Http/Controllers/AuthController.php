<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        if(Session::has('jwt')){
            return redirect()->route('dashboard');
        }

        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
           'username' => 'required',
           'password' => 'required'
        ]);

        $response = Http::post('https://api.himatikauty.or.id/api/auth/login', [
            'nim' => $credentials['username'],
            'password' => $credentials['password'],
        ])->json();

        if($response['success'] == true) {
            if($response['data']['role'] == 'Superadmin' ||$response['data']['role'] == 'Admin' || $response['data']['role'] == 'Member') {
                $payload = [
                    'nim' => $response['data']['nim'],
                    'nama' => $response['data']['nama'],
                    'role' => $response['data']['role'],
                    'angkatan' => $response['data']['angkatan'],
                    'divisi' => $response['data']['divisi'],
                ];

                $jwt = JWT::encode($payload, env('JWT_KEY'), 'HS256');
                $request->session()->put('jwt', $jwt);
                $request->session()->put('api_token', $response['data']['token']);
                
                return redirect()->route('dashboard');
            } else return redirect()->route('login')->with('error', 'Anda tidak memiliki akses ke halaman ini');
        } else return redirect()->route('login')->with('error', $response['messages']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('jwt');
        return redirect()->route('login')->with('success', 'Sukses, Anda berhasil logout');
    }

    public static function getJWT()
    {
        try {
            return JWT::decode(session('jwt'), new Key(env('JWT_KEY'), 'HS256'));
        } catch (ExpiredException) {
            return redirect()->route('login');
        }
    }
}