<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    echo "Selamat Datang";
});
    
Route::get('/about', function () {
    echo "<h1>Girindra Fajar Nugraha <br><br> 1941720116</h1>";
});

Route::get('/articles/{id}', function ($id) {
    return '<h1>Halaman articles dengan ID '.$id . "</h1>";
});
   