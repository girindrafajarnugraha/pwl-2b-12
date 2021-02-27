<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id) {
        return '<h1>Halaman articles dengan ID '.$id . "</h1>";
    }  
}
