<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Modul;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ModulController extends Controller
{
	public function index()
	{
		return view('dashboard.modul.index', [
			'title' => 'Modul',
			'moduls' => Modul::with('category')->get(),
		]);
	}

	public function create()
	{
		return view('dashboard.modul.create', [
			'title' => 'Modul',
			'categories' => Category::all(),
		]);
	}

	public function create_save(Request $request)
	{
		$request->validate([
			'category' => 'required',
			'name' => 'required|string|max:255|unique:modul',
			'slug' => 'required|string|max:255|unique:modul',
			'level' => 'required',
			'description' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		$imageName = time().'.'.$request->image->extension();
		$request->image->move(public_path('upload/modul'), $imageName);

		Modul::create([
			'id_category' => $request->category,
			'name' => $request->name,
			'slug' => $request->slug,
			'level' => $request->level,
			'description' => $request->description,
			'image' => $imageName,
		]);

		return redirect()->route('modul')->with('success', 'Modul berhasil ditambahkan');
	}

	public function edit($id)
	{
		return view('dashboard.modul.edit', [
			'title' => 'Modul',
			'categories' => Category::all(),
			'modul' => Modul::find($id),
		]);
	}

	public function edit_save(Request $request, $id)
	{
		$oldData = Modul::find($id);
		$rules_name = $request->name == $oldData->name ? 'required|string|max:255' : 'required|string|max:255|unique:modul';
		$rules_slug = $request->slug == $oldData->slug ? 'required|string|max:255' : 'required|string|max:255|unique:modul';

		$request->validate([
			'category' => 'required',
			'name' => $rules_name,
			'slug' => $rules_slug,
			'level' => 'required',
			'description' => 'required',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		if ($request->hasFile('image')) {
			$imageName = time().'.'.$request->image->extension();
			$request->image->move(public_path('upload/modul'), $imageName);
			File::delete(public_path('upload/modul/'.$oldData->image));
		} else {
			$imageName = $oldData->image;
		}

		Modul::where('id', $id)->update([
			'id_category' => $request->category,
			'name' => $request->name,
			'slug' => $request->slug,
			'level' => $request->level,
			'description' => $request->description,
			'image' => $imageName,
		]);

		return redirect()->route('modul')->with('success', 'Modul berhasil diubah');
	}

	public function destroy($id)
	{
		$modul = Modul::find($id);
		File::delete(public_path('upload/modul/' . $modul->image));
		$modul->delete();
		return redirect()->route('modul')->with('success', 'Modul berhasil dihapus');
	}
}
