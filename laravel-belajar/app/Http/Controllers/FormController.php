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

        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function listMahasiswa()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa-index', compact('data'));
    }
}
