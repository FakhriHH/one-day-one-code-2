@extends('layouts.master')

@section('title', 'About')

@section('heading', 'Tentang Aplikasi')

@section('content')
    <ul>
        <li>Nama Aplikasi: {{ $appName }}</li>
        <li>Versi: {{ $version }}</li>
    </ul>
@endsection
