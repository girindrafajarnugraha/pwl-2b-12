<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     echo "Selamat Datang";
// });
    
// Route::get('/about', function () {
//     echo "<h1>Girindra Fajar Nugraha <br><br> 1941720116</h1>";
// });

// Route::get('/articles/{id}', function ($id) {
//     return '<h1>Halaman articles dengan ID '.$id . "</h1>";
// });

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/about', [WelcomeController::class, 'about']);

Route::get('/articles/{id}', [WelcomeController::class, 'articles']);
   