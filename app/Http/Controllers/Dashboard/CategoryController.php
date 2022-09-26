<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
   public function index()
   {
      return view('dashboard.category.index', [
         'title' => 'Category',
         'categories' => Category::all(),
      ]);
   }
	
	public function create()
	{
		return view('dashboard.category.create', [
			'title' => 'Category',
		]);
	}

	public function create_save(Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255|unique:category',
			'slug' => 'required|string|max:255|unique:category|alpha_dash|min:3',
			'description' => 'required|string',
			'icon' => 'required|string',
			'color' => 'required|string',
		]);

		Category::create([
			'name' => $request->name,
			'slug' => $request->slug,
			'description' => $request->description,
			'icon' => $request->icon,
			'color' => $request->color,
		]);

		return redirect()->route('category')->with('success', 'Category berhasil ditambahkan');
	}

	public function edit($id)
	{
		return view('dashboard.category.edit', [
			'title' => 'Category',
			'category' => Category::find($id),
		]);
	}

	public function edit_save(Request $request, $id)
	{
		$oldData = Category::find($id);
		$rules_name = $request->name == $oldData->name ? 'required|string|max:255' : 'required|string|max:255|unique:category';
		$rules_slug = $request->slug == $oldData->slug ? 'required|string|max:255|alpha_dash|min:3' : 'required|string|max:255|unique:category|alpha_dash|min:3';

		$request->validate([
			 'name' => $rules_name,
			 'slug' => $rules_slug,
			 'description' => 'required|string',
			 'icon' => 'required|string',
			 'color' => 'required|string',
		]);

		Category::find($id)->update([
			 'name' => $request->name,
			 'slug' => $request->slug,
			 'description' => $request->description,
			 'icon' => $request->icon,
			 'color' => $request->color,
		]);

		return redirect()->route('category')->with('success', 'Category berhasil diubah');
	}

	public function destroy($id)
	{
		Category::find($id)->delete();
		return redirect()->route('category')->with('success', 'Category berhasil dihapus');
	}
}
