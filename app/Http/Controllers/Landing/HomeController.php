<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Modul;

class HomeController extends Controller
{
	public function index()
	{
		return view('landing.index', [
			'title' => 'Home',
			'categories' => Category::all(),
		]);
	}

	public function tutorial()
	{
		return view('landing.tutorial', [
			'title' => 'Pilih Modul',
			'moduls' => Modul::with('category')->get(),
		]);
	}

	public function tutorial_detail($slug)
	{
		return view('landing.detail', [
			'title' => 'Artikel',
			'modul' => Modul::where('slug', $slug)->with('category')->first(),
		]);
	}

	public function read($slug)
	{
	 	return view('landing.read', [
			'title' => $slug,
		]);
	}

	public function topic($topic)
	{
		return view('landing.topic', [
			'title' => $topic,
			'topic' => $topic,
		]);
	}
}
