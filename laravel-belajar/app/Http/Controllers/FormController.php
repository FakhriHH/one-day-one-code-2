<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

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
            'email' => 'required|email|unique:mahasiswa,email',
            'nilai' => 'required|numeric|between:0,100',
        ]);

        // Simpan ke database
        $mhs = Mahasiswa::create($validated);

        return redirect('/list-form')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function listForm()
    {
        $data = Mahasiswa::all();
        return view('form-index', compact('data'));
    }
}
