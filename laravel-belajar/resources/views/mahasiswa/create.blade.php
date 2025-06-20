@extends('layouts.master')
@section('title', 'Tambah Mahasiswa')
@section('heading', 'Form Tambah Mahasiswa')

@section('content')
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama"><br>
        <label>Email:</label>
        <input type="text" name="email"><br>
        <label>Nilai:</label>
        <input type="number" name="nilai"><br>
        <button type="submit">Simpan</button>
    </form>
@endsection
