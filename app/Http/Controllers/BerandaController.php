<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Buku;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //fungsi home
    public function home(){
        return view('home');
    }

    public function instalasi_laravel(){
        return view('instalasi_laravel');
    }

    public function about(){
        return view('about');
    }  

    public function help(){
        return view('help');
    }  

    public function daftarbuku(){
        $buku = Buku::all();
        return view('buku', compact('buku'));
    }
}
