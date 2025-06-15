<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $nama = "Andi Laravel";
        return view('home', compact('nama'));
    }

    public function about()
    {
        return view('about', [
            'appName' => 'Belajar Laravel',
            'version' => '1.0'
        ]);
    }
}
