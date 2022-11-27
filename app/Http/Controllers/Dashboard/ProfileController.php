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
        $response = Http::put('https://dash.api.himatikauty.com/api/pengurus/'.$jwt->username, [
            'nim' => $jwt->username,
            'nama' => $jwt->fullname,
            'angkatan' => $jwt->angkatan,
            'password' => $request->password,
            'id_divisi' => $jwt->divisi,
        ])->json();

        if($response['success'] == true) {
            IsChangePassword::create([
                'npm' => $jwt->username,
                'status' => true,
            ]);

            return redirect()->route('profile')->with('success', 'Password berhasil diubah');
        } else return redirect()->route('profile')->with('error', 'password gagal diubah');

        return redirect()->back()->with('success', 'Password Berhasil Diubah');
    }
}
