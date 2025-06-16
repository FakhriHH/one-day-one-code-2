@extends('layouts.master')

@section('title', 'Form Mahasiswa')
@section('heading', 'Form Input')

@section('content')
    <form action="/form" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label>Nilai:</label>
        <input type="number" name="nilai" required><br><br>

        <button type="submit">Kirim</button>
    </form>
@endsection
