<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Modul;
use App\Models\Article;
use App\Models\Recommend;
use Inertia\Inertia;

class HomeController extends Controller
{
	public function index()
	{
		return Inertia::render('Home', [
			'title' => 'Home',
			'categories' => Category::all(),
			'articles' => Article::orderBy('created_at', 'desc')->take(6)->get(),
		]);
	}

	public function all_article ()
	{
		return Inertia::render('AllArticle', [
			'title' => 'All Article',
			'moduls' => Modul::all(),
			'articles' => Article::orderBy('created_at', 'desc')->get(),
		]);
	}

	public function tutorial()
	{
		return Inertia::render('Tutorial', [
			'title' => 'Pilih Modul',
			'moduls' => Modul::with('category')->paginate(5),
			'recommends' => Recommend::with('modul')->get()
		]);
	}

	public function tutorial_detail($slug)
	{
		$modul = Modul::where('slug', $slug)->firstOrFail();
		$articles = Article::where('id_modul', $modul->id)->orderBy('created_at', 'asc')->get();
		return Inertia::render('Detail', [
			'title' => 'Artikel',
			'modul' => $modul,
			'articles' => $articles,
			'count' => $articles->count(),
		]);
	}

	public function read($slug)
	{
		$article = Article::where('slug', $slug)->with('modul')->first();
		if(!$article) abort(404);
	 	return Inertia::render('Read', [
			'title' => $article->title,
			'article' => $article,
			'articles' => Article::where('id_modul', $article->id_modul)->orderBy('created_at', 'asc')->get(),
			'recent' => Article::orderBy('created_at', 'desc')->limit(4)->get(),
		]);
	}

	public function topic($topic)
	{
		$articles = Article::where('topic', 'like', '%'.$topic.'%')->paginate(6);
		return Inertia::render('Topic', [
			'title' => ucwords($topic),
			'topic' => $topic,
			'articles' => $articles,
		]);
	}

	public function search()
	{
		return Inertia::render('Search', [
			'title' => 'Search',
			'articles' => Article::all(),
		]);
	}
}