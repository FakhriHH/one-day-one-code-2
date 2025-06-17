@extends('layouts.master')

@section('title', 'Hasil Validasi')
@section('heading', 'Hasil Input Mahasiswa')

@section('content')
    <p><strong>Nama:</strong> {{ $nama }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Nilai:</strong> {{ $nilai }}</p>
    <p><strong>Status:</strong> {{ $nilai >= 75 ? 'Lulus' : 'Tidak Lulus' }}</p>
@endsection
