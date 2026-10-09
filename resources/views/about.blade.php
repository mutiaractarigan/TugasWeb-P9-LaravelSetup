@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>Tentang Saya</h1>
    <p>{{ $deskripsi }}</p>

    <h3>Daftar Tugas Pemrograman Web</h3>
    <table>
        <thead>
            <tr>
                <th>Pertemuan</th>
                <th>Judul Tugas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tugas as $item)
                <tr>
                    <td>{{ $item['pertemuan'] }}</td>
                    <td>{{ $item['judul'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
