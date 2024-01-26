<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AuthController;
use App\Models\IsChangePassword;

class ProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index', [
            'title' => 'My Profile',
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'cnfrm_password' => 'required|same:password',
        ]);

        $jwt = AuthController::getJWT();
        $response = Http::withToken(session('api_token'))->put('https://api.himatikauty.or.id/api/pengurus/'.$jwt->nim, [
            'password' => $request->password,
        ])->json();

        if($response['code'] == 401) {
			session()->forget('jwt');
			session()->forget('api_token');
			return redirect()->route('login')->with('error', 'Token expired, silahkan login kembali');
		}

        if($response['success'] == true) {
            IsChangePassword::create([
                'npm' => $jwt->nim,
                'status' => true,
            ]);

            return redirect()->route('profile')->with('success', 'Password berhasil diubah');
        } else return redirect()->route('profile')->with('error', 'Password gagal diubah');

        return redirect()->back()->with('success', 'Password Berhasil Diubah');
    }
}
