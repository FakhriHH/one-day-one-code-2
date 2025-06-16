<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function handleForm(Request $request)
    {
        $nama = $request->input('nama');
        $nilai = $request->input('nilai');

        return view('form-hasil', compact('nama', 'nilai'));
    }
}
