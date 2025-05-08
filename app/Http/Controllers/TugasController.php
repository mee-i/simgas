<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $tugas = [
            ['id' => 1, 'judul' => 'Tugas Matematika'],
            ['id' => 2, 'judul' => 'Tugas Bahasa Indonesia'],
            ['id' => 3, 'judul' => 'Tugas IPA'],
        ];

        return view('tugas.index', compact('tugas'));
    }

    public function show($id)
    {
        $tugas = [
            1 => ['id' => 1, 'judul' => 'Tugas Matematika', 'deskripsi' => 'Kerjakan soal halaman 45'],
            2 => ['id' => 2, 'judul' => 'Tugas Bahasa Indonesia', 'deskripsi' => 'Buat puisi tentang alam'],
            3 => ['id' => 3, 'judul' => 'Tugas IPA', 'deskripsi' => 'Laporan percobaan fotosintesis'],
        ];

        if (!isset($tugas[$id])) {
            abort(404);
        }

        return view('tugas.show', ['tugas' => $tugas[$id]]);
    }
}
