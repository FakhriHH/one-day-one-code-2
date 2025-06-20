@extends('layouts.master')
@section('title', 'Daftar Mahasiswa')
@section('heading', 'Daftar Mahasiswa')

@section('content')
    <a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>
    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $m)
            <tr>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->email }}</td>
                <td>{{ $m->nilai }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a> |
                    <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
