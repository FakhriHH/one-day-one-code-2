@extends('layouts.master')
@section('title', 'Edit Mahasiswa')
@section('heading', 'Form Edit Mahasiswa')

@section('content')
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br>
        <label>Email:</label>
        <input type="text" name="email" value="{{ $mahasiswa->email }}"><br>
        <label>Nilai:</label>
        <input type="number" name="nilai" value="{{ $mahasiswa->nilai }}"><br>
        <button type="submit">Update</button>
    </form>
@endsection
