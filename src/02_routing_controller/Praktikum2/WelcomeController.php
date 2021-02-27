<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class WelcomeController extends Controller
// {
//     public function hello() {
//         return 'Hello World';
//        }       
// }

// class WelcomeController extends Controller
// {
//     public function index() {
//         return '<h1>Selamat Datang</h1>';
//        }       
// }

// class WelcomeController extends Controller
// {
//     public function about() {
//         return '<h1>Girindra Fajar Nugraha <br><br> 1941720116</h1>';
//        }       
// }

class WelcomeController extends Controller
{
    public function articles($id) {
        return '<h1>Halaman articles dengan ID '.$id . "</h1>";
       }       
}