@extends('layout.app')

<!-- Diubah dari 'konten' menjadi 'content' agar sinkron dengan @yield('content') di app.blade.php -->
@section('content')
    <h2><font color="#c0392b">HALAMAN BERANDA</font></h2>
    <font size="3">
        <p>Selamat datang di Web Tugas Pemrograman Web!</p>
        <p>Website ini sebagai tempat untuk mengumpulkan Tugas UTS &amp; UAS jadi satu dan rapi. Di sini, hpasil praktikum dan ujian yang sudah saya kerjakan digabung ke dalam satu menu navigasi, jadi lebih gampang untuk dilihat dan diakses kembali.</p>
    </font>
    <br>
    <hr>
    <br>
    
    <!-- Menggunakan tabel dengan 3 kolom (td) agar posisinya berjajar ke samping -->
    <table border="1" cellpadding="10" bgcolor="#fdecea" style="border-collapse: collapse; border-color: #c0392b;">
        <tr>
            <!-- Kolom 1: Komik -->
            <td align="center" width="200">
                <font face="Arial" size="3" color="#c0392b">&#128218; Komik</font><br>
                <font size="2">Koleksi manga Jepang terlengkap</font><br>
                <a href="{{ url('/komik') }}"><font size="2">Lihat Produk &raquo;</font></a>
            </td>

            <!-- Kolom 2: UTS (Diubah mengarah ke url laravel agar masuk ke dalam layout) -->
            <td align="center" width="200">
                <font face="Arial" size="3" color="#c0392b">&#128221; UTS</font><br>
                <font size="2">Tugas UTS (Native/Hanya Form)</font><br>
                <a href="{{ url('/uts') }}"><font size="2">Lihat Produk &raquo;</font></a>
            </td>

            <!-- Kolom 3: UAS (Menghapus target="_blank" agar bisa kembali menggunakan tombol Back browser) -->
            <td align="center" width="200">
                <font face="Arial" size="3" color="#c0392b">&#128196; UAS</font><br>
                <font size="2">Tugas UAS (Layout Lengkap)</font><br>
                <a href="http://localhost/Dinsstore"><font size="2">Lihat Produk &raquo;</font></a>
            </td>
        </tr>
    </table>
@endsection