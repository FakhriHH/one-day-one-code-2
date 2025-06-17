@extends('layouts.master')

@section('title', 'Form Mahasiswa')
@section('heading', 'Form Input Validasi')

@section('content')
    {{-- Tampilkan Error --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/form" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ old('nama') }}"><br><br>

        <label>Email:</label>
        <input type="text" name="email" value="{{ old('email') }}"><br><br>

        <label>Nilai:</label>
        <input type="number" name="nilai" value="{{ old('nilai') }}"><br><br>

        <button type="submit">Kirim</button>
    </form>
@endsection
