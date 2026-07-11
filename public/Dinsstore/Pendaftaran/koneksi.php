<?php
//mysqli_report(MYSQLI_REPORT_OFF);
// koneksi
$host = "thomas.proxy.rlwy.net";
$user = "root";
$pw   = "YtAMYjqEraBgTySajCLJfymTQfaTtUtI";
$db   = "railway";
$port = "58572";
// koneksi database
$cek = @mysqli_connect($host, $user, $pw, $db, $port);

if (!$cek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}