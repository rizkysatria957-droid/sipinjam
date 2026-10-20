<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/halamandepan', function () {
    return view('halamandepan');
});

Route::get('/tentang-kami', function () {
 return view('halamanbaru');
})->name('halamanbaru');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/profil', function () {
    return view('profil', [
        'nama'    => 'Budi Santoso',
        'nim'     => '224100001',
        'kelas'   => 'TI-2A',
        'prodi'   => 'Teknik Informatika',
        'kampus'  => 'Politeknik Manufaktur Bandung',
        'hobi'    => 'Ngoding dan Membaca Buku', 
        'alamat'  => 'Jl. Kanayakan No. 21, Bandung', 
    ]);
});

Route::get('/latihan-blade', function () {
 return view('latihan-blade', [
 'nilai' => 60,
 'hobi' => ['Membaca', 'Bermain futsal', 'Ngoding'],
 'kosong' => [],
 'catatan' => '<b>Teks ini tebal</b>',
 ]);
});

Route::get('/alat', function () {
    $alat = [
        ['kode' => 'ALT-0001', 'nama' => 'Multimeter Digital', 'kategori' => 'Alat Ukur', 'stok' => 5],
        ['kode' => 'ALT-0002', 'nama' => 'Osiloskop', 'kategori' => 'Alat Ukur', 'stok' => 0],
        ['kode' => 'ALT-0003', 'nama' => 'Solder 40 Watt', 'kategori' => 'Alat Solder', 'stok' => 8],
        ['kode' => 'ALT-0004', 'nama' => 'Arduino Uno', 'kategori' => 'Mikrokontroler', 'stok' => 12],
        ['kode' => 'ALT-0005', 'nama' => 'Tang Potong', 'kategori' => 'Perkakas', 'stok' => 3],
        // Tambahan 2 alat baru (1 alat dengan stok 0 agar tampil merah)
        ['kode' => 'ALT-0006', 'nama' => 'Power Supply DC', 'kategori' => 'Alat Ukur', 'stok' => 0],
        ['kode' => 'ALT-0007', 'nama' => 'Breadboard', 'kategori' => 'Aksesoris', 'stok' => 25],
    ];

    // Mengirim nama mahasiswa ke view untuk judul
    return view('alat', [
        'alat' => $alat,
        'namamahasiswa' => 'Budi Santoso' 
    ]);
});

Route::get('/dashboard', function () {
 return view('dashboard');
});


