<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|--------------------------------------------------------------------------
*/

//Praktikum 2

// Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController2::class, 'home']);

Route::get('/product', [HomeController2::class, 'product']);

Route::get('/news', [HomeController2::class, 'news']);

Route::get('/program', [HomeController2::class, 'program']);

Route::get('/about', [HomeController2::class, 'about']);

Route::get('/contact', [HomeController2::class, 'contact']);

// Route::get('/features', [HomeController::class, 'features']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('profil', ProfilController::class);
