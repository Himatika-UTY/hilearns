<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ModulController;

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
Route::prefix('admin')->group(function () {
	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

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
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tutorial', [HomeController::class, 'tutorial'])->name('tutorial');
Route::get('/tutorial/{slug}', [HomeController::class, 'tutorial_detail'])->name('detail');
Route::get('/topic/{topic}', [HomeController::class, 'topic'])->name('topic');

// Line ini harus tetap berada di paling bawah agar route tidak tabrakan
Route::get('/{slug}', [HomeController::class, 'read'])->name('read');

