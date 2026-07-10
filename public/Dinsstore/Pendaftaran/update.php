<?php

include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$sekolah = $_POST['sekolah'];
$jur1 = $_POST['jur1'];

mysqli_query(
    $cek,
    "UPDATE pendaftaran
    SET
    nama='$nama',
    sekolah='$sekolah',
    jur1='$jur1'
    WHERE id='$id'"
);

header("Location:data.php");

?>