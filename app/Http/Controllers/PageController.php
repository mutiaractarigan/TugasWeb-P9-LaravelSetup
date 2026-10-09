<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'nama' => 'Mutiara Chalista Tarigan',
            'jurusan' => 'Ilmu Komputer',
            'kampus' => 'Universitas Negeri Medan',
            'skills' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel'],
        ];

        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'deskripsi' => 'Saya mahasiswa semester 3 yang sedang belajar pengembangan web, mulai dari HTML, CSS, PHP native, hingga framework Laravel.',
            'tugas' => [
                ['pertemuan' => 2, 'judul' => 'Portofolio HTML & CSS'],
                ['pertemuan' => 4, 'judul' => 'Konversi CSS ke SCSS'],
                ['pertemuan' => 7, 'judul' => 'Sistem Login/Register PHP Native'],
                ['pertemuan' => 8, 'judul' => 'CRUD Inventaris dengan PDO'],
                ['pertemuan' => 9, 'judul' => 'Setup Laravel'],
            ],
        ];

        return view('about', $data);
    }

    public function contact()
    {
        $kontak = [
            'Email' => 'mutiara@example.com',
            'GitHub' => 'github.com/mutiaractarigan',
            'Alamat' => 'Medan, Sumatera Utara',
        ];

        return view('contact', ['kontak' => $kontak]);
    }
}
