<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\IsChangePassword;
use App\Http\Controllers\AuthController;
use App\Models\Viewers;
use App\Models\Article;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Models\Modul;

class DashboardController extends Controller
{
   public function index()
   {
      $jwt = AuthController::getJWT();
      return view('dashboard.index', [
         'title' => 'Dashboard',
         'isChangePassword' => IsChangePassword::where('npm', AuthController::getJWT()->username)->first(),
         'total_viewers' => Viewers::with('article')->whereHas('article', function ($query) use ($jwt) {
            $query->where('author', $jwt->fullname);
         })->get(),
         'today_viewers' => Viewers::with('article')->whereHas('article', function ($query) use ($jwt) {
            $query->where('author', $jwt->fullname);
         })->whereDate('created_at', date('Y-m-d'))->get(),
         'total_article' => Article::where('author', $jwt->fullname)->get(),
         'moduls' => Modul::with('category')->get(),
      ]);
   }
}
