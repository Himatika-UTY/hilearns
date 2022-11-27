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

class ArticleController extends Controller
{
    public function index()
    {
        return view('dashboard.article.index', [
            'title' => 'Article',
            'articles' => Article::with('modul')->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.article.create', [
            'title' => 'Article',
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

        return redirect()->route('article')->with('success', 'Article berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('dashboard.article.edit', [
            'title' => 'Article',
            'moduls' => Modul::all(),
            'article' => Article::find($id),
        ]);
    }

    public function edit_save(Request $request, $id)
    {
        $oldData = Article::find($id);
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

        // get jwt
        $jwt = AuthController::getJWT();

        Article::find($id)->update([
            'id_modul' => $request->modul,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author' => $jwt->nama,
            'topic' => implode(',', array_column(json_decode($request->topic), 'value')),
            'image' => $imageName,
            'content' => $request->content,
        ]);

        return redirect()->route('article')->with('success', 'Article berhasil diubah');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        File::delete(public_path('upload/articles/' . $article->image));
        $article->delete();
        return redirect()->route('article')->with('success', 'Article berhasil dihapus');
    }
}