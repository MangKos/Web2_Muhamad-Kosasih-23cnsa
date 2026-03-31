<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Monitoring Siswa - Landing Page',
        'nama_sistem' => 'Sistem Monitoring Pelanggaran Siswa',
        'total_siswa' => 1250,
        'total_pelanggaran' => 45,
        'total_laporan' => 12,
        'tingkat_kepatuhan' => 95,
        'kontak_telepon' => '+62 123 456 7890',
        'kontak_email' => 'info@smkbanjai2.sch.id',
        'alamat_sekolah' => 'Jl. Pendidikan No. 1, Banjai'
    ]);
});
