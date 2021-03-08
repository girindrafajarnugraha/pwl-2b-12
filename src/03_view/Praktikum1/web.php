<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

//Praktikum 1

//Home (done)
Route::get('/home', [HomeController::class, 'home']);

//Product (done)
Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
});

//News (done)
Route::get('/news', [ArticleController::class, 'news']);
Route::get('/news/{string}', [ArticleController::class, 'newsString']);

//Program (done)
Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
});

//About us (done)
Route::get('/about-us', [AboutController::class, 'aboutus']);

//Contact us (done)
Route::get('/contact-us', [ContactController::class, 'contactus']);