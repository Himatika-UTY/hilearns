<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Recommend;
use App\Models\Modul;

class RecommendController extends Controller
{
   public function index()
   {
      return view('dashboard.recommend.index', [
         'title' => 'Recommendation',
			'recommends' => Recommend::with('modul')->get()
		]);
	}

	public function create()
	{
		return view('dashboard.recommend.create', [
			'title' => 'Recommendation',
			'moduls' => Modul::all()
		]);
	}

	public function save(Request $request)
	{
		$request->validate([
			'modul' => 'required|exists:modul,id|unique:recommend,id_modul'
		]);

		Recommend::create([
			'id_modul' => $request->modul
		]);

		return redirect()->route('recommend')->with('success', 'Recommendation berhasil ditambahkan');
	}

	public function destroy($id)
	{
		Recommend::find($id)->delete();
		return redirect()->route('recommend')->with('success', 'Recommendation berhasil dihapus');
	}
}
