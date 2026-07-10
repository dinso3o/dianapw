<?php
// Memanggil file koneksi di paling atas agar variabel koneksi dapat langsung digunakan
include "koneksi.php";

// Ambil data dari form pendaftaran
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah'];
$mtk = $_POST['mtk'];
$ing = $_POST['ing'];
$indo = $_POST['indo'];
$jur1 = $_POST['jur1'];
$jur2 = $_POST['jur2'];
$alasan = $_POST['alasan'];

// Mengubah format tanggal pendaftaran agar standar database (Y-m-d) jika kolomnya bertipe DATE
$tgl_daftar = date("Y-m-d"); 

// --- PERINTAH UNTUK MENYIMPAN DATA KE DATABASE ---
$simpan_data = false;

// Validasi tambahan: Data hanya disimpan jika koneksi aman ($cek) DAN pendaftar sudah mencentang konfirmasi yakin
if ($cek && isset($_POST['yakin'])) {
    
    // Pastikan nama kolom di bawah ini (nama, tempat, tanggal, dst) SAMA PERSIS dengan di database kamu
    $query_insert = "INSERT INTO pendaftaran (nama, tempat, tanggal, jk, alamat, sekolah, mtk, ing, indo, jur1, jur2, alasan, tgl_daftar) 
                     VALUES ('$nama', '$tempat', '$tanggal', '$jk', '$alamat', '$sekolah', '$mtk', '$ing', '$indo', '$jur1', '$jur2', '$alasan', '$tgl_daftar')";
    
    $simpan_data = mysqli_query($cek, $query_insert);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Toko Manga - Hasil Pendaftaran</title>
</head>

<body bgcolor="#fff8f0">

    <table width="100%" bgcolor="#c0392b">
        <tr>
            <td align="center">
                <font face="Arial" size="7" color="white">
                    TOKO MANGA &amp; KOMIK ONLINE
                </font>
                <br>
                <font face="Arial" size="3" color="#ffdddd">
                    Surga Para Pecinta Manga &amp; Komik!
                </font>
            </td>
        </tr>
    </table>

    <br>

    <table border="1" width="100%" cellpadding="6">
        <tr>
            <td width="150" valign="top" bgcolor="#2c3e50">
                <font face="Arial" size="4" color="yellow">
                    MENU
                </font>
                <br><br>
                <font face="Arial" size="3">
                    <a href="/Dinsstore/index.html"><font color="white">Beranda</font></a><br><br>
                    <a href="/Dinsstore/buku.html"><font color="white">Manga</font></a><br><br>
                    <a href="/Dinsstore/fashion.html"><font color="white">Fashion</font></a><br><br>
                    <a href="/Dinsstore/gaming.html"><font color="white">Gaming</font></a><br><br>
                    <a href="/Dinsstore/profil.html"><font color="white">Profil</font></a><br><br>
                    <a href="/Dinsstore/kontak.html"><font color="white">Kontak</font></a><br><br>
                    <a href="form.html"><font color="yellow">Pendaftaran</font></a><br><br>
                    <a href="data.php"><font color="white">Data pendaftar</font></a>
                </font>
            </td>

            <td valign="top" bgcolor="#fffdf5">
                <table width="100%" border="1" cellpadding="5" bgcolor="#ecf0f1">
                    <tr>
                        <td>
                            <?php
                            if ($cek) {
                                echo "<font color='green'><b>Koneksi berhasil. </b></font>";
                                
                                // Cek apakah checkbox dilewati atau tidak dicentang
                                if (!isset($_POST['yakin'])) {
                                    echo "<font color='red'><b>Gagal menyimpan data. Anda harus mencentang kotak konfirmasi yakin!</b></font>";
                                } else {
                                    if ($simpan_data) {
                                        echo "<font color='green'><b>Data berhasil disimpan ke database!</b></font>";
                                    } else {
                                        echo "<font color='red'><b>Gagal menyimpan data. Error: " . mysqli_error($cek) . "</b></font>";
                                    }
                                }
                            } else {
                                echo "<font color='red'><b>Koneksi gagal</b></font>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>

                <br>

                <table width="100%" border="1" cellpadding="10" bgcolor="white">
                    <tr>
                        <td>
                            <font face="Arial">
                                <h2>
                                    <font color="#c0392b">HASIL PENDAFTARAN</font>
                                </h2>
                                <hr>

                                Nama : <?= htmlspecialchars($nama) ?> <br><br>
                                Tempat Lahir : <?= htmlspecialchars($tempat) ?> <br><br>
                                Tanggal Lahir : <?= htmlspecialchars($tanggal) ?> <br><br>
                                Jenis Kelamin : <?= htmlspecialchars($jk) ?> <br><br>
                                Alamat : <?= htmlspecialchars($alamat) ?> <br><br>
                                Sekolah Asal : <?= htmlspecialchars($sekolah) ?> <br><br>

                                <b>Nilai TKA</b><br><br>
                                Matematika : <?= htmlspecialchars($mtk) ?> <br><br>
                                Bahasa Inggris : <?= htmlspecialchars($ing) ?> <br><br>
                                Bahasa Indonesia : <?= htmlspecialchars($indo) ?> <br><br>

                                <b>Jurusan Yang Dipilih</b><br><br>
                                Pilihan 1 : <?= htmlspecialchars($jur1) ?> <br><br>
                                Pilihan 2 : <?= htmlspecialchars($jur2) ?> <br><br>
                                Alasan : <?= htmlspecialchars($alasan) ?> <br><br>

                                <b>
                                    TANGGAL DAFTAR :
                                    <?= strtoupper(date("d F Y", strtotime($tgl_daftar))) ?>
                                </b>
                                <br><br>
                                <a href="form.html">&laquo; Kembali ke Form</a>
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>