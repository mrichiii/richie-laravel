<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('produk');
});

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/profile', function () {
    $nama = 'Muhammad Richie Hadiansah';
    // return view('profile', compact('nama'));
    return view('profile')->with('nama', $nama);
});