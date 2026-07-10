<?php

use Illuminate\Support\Facades\Route;

// 1. Route untuk Halaman Utama (Welcome)
Route::get('/', function () {
    return view('welcome'); // Membuka file welcome.blade.php
});

// 2. Route untuk Halaman Komik (Jika mau diakses terpisah)
Route::get('/komik', function () {
    return view('menu.komik'); // Membuka file komik.blade.php yang ada di dalam folder menu
});

Route::get('/uts', function () {
    return view('menu.uts');
});