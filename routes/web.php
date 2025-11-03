<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/produk', function () {
    $page_title = 'Produk';

    $products = [
        [
            "kode_produk" => "BRG001",
            "nama_produk" => "Pena",
            "jenis_produk" => "Alat Tulis",
            "harga_produk" => 20000
        ],
        [
            "kode_produk" => "BRG002",
            "nama_produk" => "Buku",
            "jenis_produk" => "Alat Tulis",
            "harga_produk" => 15000
        ]
    ];

    return view('produk', compact('page_title', 'products'));
});

Route::get('/tambah', function () {
    $products_type = [
        [
            "jenis" => "Alat Tulis"
        ],
        [
            "jenis" => "Elektronik"
        ],
        [
            "jenis" => "Sembako"
        ],
    ];
    return view('tambah', compact('products_type'));
});
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// Route::resource('mahasiswa', MahasiswaController::class);

// Route::get('/profile', function () {
//     $nama = 'Muhammad Richie Hadiansah';
//     // return view('profile', compact('nama'));
//     return view('profile')->with('nama', $nama);
// });