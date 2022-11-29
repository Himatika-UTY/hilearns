<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contributor;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File; 

class ContributorController extends Controller
{
	public function index()
	{
		return view('dashboard.contributor.index', [
			'title' => 'Contributors',
			'contributors' => Contributor::all(),
		]);
	}

	public function create()
	{
		$pengurus = Http::withToken(session('api_token'))->get('https://api.himatikauty.com/api/pengurus')->json();
		if($pengurus['code'] == 401) {
			session()->forget('jwt');
			session()->forget('api_token');
			return redirect()->route('login')->with('error', 'Token expired, silahkan login kembali');
		}

		return view('dashboard.contributor.create', [
			'title' => 'Contributors',
			'pengurus' => $pengurus,
		]);
	}

	public function create_save(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'position' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'redirect_url' => 'required',
		]);

		// upload image
		$imageName = time().'.'.$request->image->extension();
		$request->image->move(public_path('upload/contributors/'), $imageName);

		Contributor::create([
			'name' => $request->name,
			'position' => $request->position,
			'image' => $imageName,
			'redirect_url' => $request->redirect_url,
		]);

		return redirect()->route('contributors')->with('success', 'Contributor berhasil ditambahkan');
	}

	public function destroy($id)
	{
		$contributor = Contributor::find($id);
		File::delete(public_path('upload/contributors/'.$contributor->image));
		$contributor->delete();
		return redirect()->route('contributors')->with('success', 'Contributor berhasil dihapus');
	}
}
