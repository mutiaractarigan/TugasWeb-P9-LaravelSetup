@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <h1>Hello, {{ $nama }}! 👋</h1>
    <p>Halaman ini menampilkan nama dari route parameter <code>/hello/{nama}</code>.</p>
@endsection
