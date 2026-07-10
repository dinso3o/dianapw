<?php
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $cek,
    "SELECT * FROM pendaftaran WHERE id='$id'"
);

$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data</h2>

<form action="update.php" method="POST">

<input type="hidden"
       name="id"
       value="<?= $d['id']; ?>">

Nama :

<input type="text"
       name="nama"
       value="<?= $d['nama']; ?>">

<br><br>

Sekolah :

<input type="text"
       name="sekolah"
       value="<?= $d['sekolah']; ?>">

<br><br>

Jurusan 1 :

<input type="text"
       name="jur1"
       value="<?= $d['jur1']; ?>">

<br><br>

<input type="submit"
       value="Simpan">

</form>

</body>
</html>