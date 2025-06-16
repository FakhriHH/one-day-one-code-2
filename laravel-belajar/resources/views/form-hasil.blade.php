@extends('layouts.master')

@section('title', 'Hasil Form')
@section('heading', 'Hasil Input Mahasiswa')

@section('content')
    <p>Nama: {{ $nama }}</p>
    <p>Nilai: {{ $nilai }}</p>

    <p>Status: {{ $nilai >= 75 ? 'Lulus' : 'Tidak Lulus' }}</p>
@endsection
