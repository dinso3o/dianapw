<?php
$nama = $_POST['nama'] ?? '';
$tempat = $_POST['tempat'] ?? '';
$tanggal = $_POST['tanggal'] ?? '';
$jk = $_POST['jk'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$sekolah = $_POST['sekolah'] ?? '';
$mtk = $_POST['mtk'] ?? '';
$ing = $_POST['ing'] ?? '';
$indo = $_POST['indo'] ?? '';
$jur1 = $_POST['jur1'] ?? '';
$jur2 = $_POST['jur2'] ?? '';
$alasan = $_POST['alasan'] ?? '';

$tgl_daftar = date("d F Y");
?>

<h2>HASIL PENDAFTARAN</h2>

Nama : <?php echo $nama; ?> <br>
Tempat Lahir : <?php echo $tempat; ?> <br>
Tanggal Lahir : <?php echo $tanggal; ?> <br>
Jenis Kelamin : <?php echo $jk; ?> <br>
Alamat : <?php echo $alamat; ?> <br>
Sekolah Asal : <?php echo $sekolah; ?> <br><br>

<b>Nilai TKA</b><br>
Matematika : <?php echo $mtk; ?> <br>
Bahasa Inggris : <?php echo $ing; ?> <br>
Bahasa Indonesia : <?php echo $indo; ?> <br><br>

<b>Jurusan Yang Dipilih</b><br>
Pilihan 1 : <?php echo $jur1; ?> <br>
Pilihan 2 : <?php echo $jur2; ?> <br><br>

Alasan : <?php echo $alasan; ?> <br><br>

<b>TANGGAL DAFTAR : <?php echo strtoupper($tgl_daftar); ?></b>