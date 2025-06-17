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

        $validated = $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email',
            'nilai' => 'required|numeric|between:0,100',
        ]);

        $nama = $validated['nama'];
        $email = $validated['email'];
        $nilai = $validated['nilai'];

        return view('form-hasil', compact('nama', 'email', 'nilai'));
    }
}
