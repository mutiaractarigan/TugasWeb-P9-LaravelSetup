@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Halo, saya {{ $nama }}</h1>
    <p>Mahasiswa {{ $jurusan }} di {{ $kampus }}.</p>

    <h3>Skill yang sedang dipelajari:</h3>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>

    <p>Coba juga route parameter: <a href="{{ route('hello', 'Mutiara') }}">/hello/Mutiara</a></p>
@endsection
