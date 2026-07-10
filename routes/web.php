<?php

use Illuminate\Support\Facades\Route;

// 1. Route untuk Halaman Utama (Welcome)
Route::get('/', function () {
    return view('welcome'); // Membuka file welcome.blade.php
});

// 2. Route untuk Halaman Komik
Route::get('/komik', function () {
    return view('menu.komik'); // Membuka file komik.blade.php yang ada di dalam folder menu
});

Route::get('/uts', function () {
    return view('menu.uts');
});
// route khusus untuk memuat form HTML
Route::get('/load-form-uts', function () {
    return file_get_contents(resource_path('views/Pendaftaran/form.html'));
});