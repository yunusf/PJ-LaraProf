<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // echo 'Selamat Datang';
        return view('pages.index');
    }
}
