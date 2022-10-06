<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ModulController;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\RecommendController;
use App\Http\Controllers\Dashboard\ContributorController;
use App\Http\Controllers\Dashboard\MyArticleController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('dash')->middleware('authenticate')->group(function () {
	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

	// profile
	Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
	Route::post('/profile/save', [ProfileController::class, 'update'])->name('profile.update');

	// User
	Route::prefix('user')->group(function () {
		Route::get('/article', [MyArticleController::class, 'index'])->name('myarticle');
		Route::get('/article/create', [MyArticleController::class, 'create'])->name('myarticle.create');
		Route::post('/article/create/save', [MyArticleController::class, 'create_save'])->name('myarticle.create.save');
		Route::get('/article/edit/{id}', [MyArticleController::class, 'edit'])->name('myarticle.edit');
		Route::put('/article/edit/save/{id}', [MyArticleController::class, 'edit_save'])->name('myarticle.edit.save');
		Route::delete('/article/delete/{id}', [MyArticleController::class, 'destroy'])->name('myarticle.delete');
	});


	// Admin
	Route::prefix('admin')->middleware('is.admin')->group(function () {
		// category
		Route::get('/category', [CategoryController::class, 'index'])->name('category');
		Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
		Route::post('/category/create/save', [CategoryController::class, 'create_save'])->name('category.create.save');
		Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
		Route::put('/category/edit/save/{id}', [CategoryController::class, 'edit_save'])->name('category.edit.save');
		Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

		// modul
		Route::get('/modul', [ModulController::class, 'index'])->name('modul');
		Route::get('/modul/create', [ModulController::class, 'create'])->name('modul.create');
		Route::post('/modul/create/save', [ModulController::class, 'create_save'])->name('modul.create.save');
		Route::get('/modul/edit/{id}', [ModulController::class, 'edit'])->name('modul.edit');
		Route::put('/modul/edit/save/{id}', [ModulController::class, 'edit_save'])->name('modul.edit.save');
		Route::delete('/modul/delete/{id}', [ModulController::class, 'destroy'])->name('modul.delete');

		// article
		Route::get('/article', [ArticleController::class, 'index'])->name('article');
		Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
		Route::post('/article/create/save', [ArticleController::class, 'create_save'])->name('article.create.save');
		Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
		Route::put('/article/edit/save/{id}', [ArticleController::class, 'edit_save'])->name('article.edit.save');
		Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy'])->name('article.delete');

		// Recommend
		Route::get('/recommend', [RecommendController::class, 'index'])->name('recommend');
		Route::get('/recommend/create', [RecommendController::class, 'create'])->name('recommend.create');
		Route::post('/recommend/create/save', [RecommendController::class, 'save'])->name('recommend.create.save');
		Route::delete('/recommend/delete/{id}', [RecommendController::class, 'destroy'])->name('recommend.delete');

		// Contributor
		Route::get('/contributor', [ContributorController::class, 'index'])->name('contributors');
		Route::get('/contributor/create', [ContributorController::class, 'create'])->name('contributors.create');
		Route::post('/contributor/create/save', [ContributorController::class, 'create_save'])->name('contributors.create.save');
		Route::delete('/contributor/delete/{id}', [ContributorController::class, 'destroy'])->name('contributors.delete');
	});
});

// Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/auth', [AuthController::class, 'authenticate'])->name('login.auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/articles', [HomeController::class, 'all_article'])->name('articles');
Route::get('/tutorial', [HomeController::class, 'tutorial'])->name('tutorial');
Route::get('/tutorial/{slug}', [HomeController::class, 'tutorial_detail'])->name('detail');
Route::get('/tags/{topic}', [HomeController::class, 'topic'])->name('topic');
Route::get('/search' , [HomeController::class, 'search'])->name('search');
Route::get('/contributor', [HomeController::class, 'contributor'])->name('contributor');

// Line ini harus tetap berada di paling bawah agar route tidak tabrakan
Route::get('/{slug}', [HomeController::class, 'read'])->name('read');

require __DIR__.'/api.php';

