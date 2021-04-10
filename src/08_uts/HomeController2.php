<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
use App\Models\index;


class HomeController2 extends Controller
{
    // public function index() {
    //     $index = Index::all();
    //     return view('index', ['posts'=>$index]);
    // }

    public function home() {
        $home = home::all();
        return view('homee', ['posts'=>$home]);
    }

    public function product() {
        return view ('product');
    }

    public function news() {
        return view ('news');
    }

    public function program() {
        return view ('program');
    }

    public function about() {
        return view ('about');
    }

    public function contact() {
        return view ('contact');
    }

    // public function features() {
    //     return view ('features');
    // }
}
