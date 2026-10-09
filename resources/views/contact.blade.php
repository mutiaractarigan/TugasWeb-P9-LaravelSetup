@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Kontak</h1>
    <p>Silakan hubungi saya melalui:</p>

    <ul>
        @foreach ($kontak as $jenis => $nilai)
            <li><strong>{{ $jenis }}:</strong> {{ $nilai }}</li>
        @endforeach
    </ul>
@endsection
