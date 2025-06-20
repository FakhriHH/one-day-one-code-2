@extends('layouts.master')

@section('title', 'Data Mahasiswa')
@section('heading', 'List Mahasiswa')

@section('content')
    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
        @foreach ($data as $mhs)
            <tr>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->nilai }}</td>
                <td>{{ $mhs->nilai >= 75 ? 'Lulus' : 'Tidak Lulus' }}</td>
            </tr>
        @endforeach
    </table>
@endsection
