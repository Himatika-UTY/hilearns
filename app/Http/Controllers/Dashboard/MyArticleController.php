<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Modul;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;

class MyArticleController extends Controller
{
    public function index()
    {
		$jwt = AuthController::getJWT();
        return view('dashboard.myarticle.index', [
			'title' => 'My Articles',
			'articles' => Article::with('modul')->where('author', $jwt->nama)->get(),
		]);
	}

    public function create()
    {
		return view('dashboard.myarticle.create', [
			'title' => 'My Articles',
			'moduls' => Modul::all(),
		]);
    }

    public function create_save(Request $request)
    {
        $request->validate([
            'modul' => 'required|integer|exists:modul,id',
            'title' => 'required|string|max:255|unique:articles,title',
            'topic' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'content' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('upload/articles/'), $imageName);

        // get jwt
        $jwt = AuthController::getJWT();

        Article::create([
            'id_modul' => $request->modul,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author' => $jwt->nama,
            'topic' => implode(',', array_column(json_decode($request->topic), 'value')),
            'image' => $imageName,
            'content' => $request->content,
        ]);

        return redirect()->route('myarticle')->with('success', 'Article berhasil ditambahkan');
    }

    public function edit($id)
    {
		$jwt = AuthController::getJWT();
		$article = Article::where('id', $id)->where('author', $jwt->nama)->first();
		if(!$article) abort(404);

		return view('dashboard.myarticle.edit', [
			'title' => 'My Articles',
			'article' => $article,
			'moduls' => Modul::all(),
		]);
    }

    public function edit_save(Request $request, $id)
    {
       	$jwt = AuthController::getJWT();
		$oldData = Article::where('id', $id)->where('author', $jwt->name)->first();
		if(!$oldData) abort(404);

        $rules_title = $request->title == $oldData->title ? 'required|string|max:255' : 'required|string|max:255|unique:articles,title';
        $rules_image = $request->image ? 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048' : '';

        $request->validate([
            'modul' => 'required|integer|exists:modul,id',
            'title' => $rules_title,
            'topic' => 'required|string|max:100',
            'image' => $rules_image,
            'content' => 'required',
        ]);

        if($request->image) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('upload/articles/'), $imageName);
            File::delete(public_path('upload/articles/' . $oldData->image));
        } else {
            $imageName = $oldData->image;
        }
        
        Article::find($id)->update([
            'id_modul' => $request->modul,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author' => $jwt->nama,
            'topic' => implode(',', array_column(json_decode($request->topic), 'value')),
            'image' => $imageName,
            'content' => $request->content,
        ]);

        return redirect()->route('myarticle')->with('success', 'Article berhasil diubah');
    }

    public function destroy($id)
    {
		$jwt = AuthController::getJWT();
		$article = Article::where('id', $id)->where('author', $jwt->nama)->first();
		if(!$article) abort(404);
		File::delete(public_path('upload/articles/' . $article->image));
        $article->delete();
        return redirect()->route('myarticle')->with('success', 'Article berhasil dihapus');
    }
}