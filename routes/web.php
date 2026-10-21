<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\Item;
use App\Models\Loan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoanController;





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

Route::resource('alat', ItemController::class)->except('show');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('kategori', CategoryController::class)->except('show');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/daftar', [AuthController::class, 'showRegister'])->name('daftar');
    Route::post('/daftar', [AuthController::class, 'register']);
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  
    Route::middleware('admin')->group(function () {
        Route::resource('kategori', CategoryController::class)->except('show');
        Route::resource('alat', ItemController::class)->except(['index', 'show']);
    });

    
    Route::get('/alat', [ItemController::class, 'index'])->name('alat.index');
});

Route::patch('/peminjaman/{peminjaman}/kembali', [LoanController::class,
'kembalikan'])->name('peminjaman.kembali');

Route::resource('peminjaman', LoanController::class)->only(['index', 'create',
'store']);






