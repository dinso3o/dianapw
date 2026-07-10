<?php
//mysqli_report(MYSQLI_REPORT_OFF);
// koneksi
$host = "localhost";
$user = "root";
$pw   = "";
$db   = "diana029";

// koneksi database
$cek = @mysqli_connect($host, $user, $pw, $db);