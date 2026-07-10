<?php
include "koneksi.php";

// PENGAMAN: Set variabel data awal sebagai false
$data = false;

// Query hanya dijalankan JIKA koneksi ($cek) berhasil/true
if ($cek) {
    $data = mysqli_query($cek, "SELECT * FROM pendaftaran");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Toko Manga - Data Pendaftar</title>
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
                    Surga Para Pecinta Manga &amp;  Komik!
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

                    <a href="/Dinsstore/index.html">
                        <font color="white">Beranda</font>
                    </a>

                    <br><br>

                    <a href="/Dinsstore/buku.html">
                        <font color="white">Manga</font>
                    </a>

                    <br><br>

                    <a href="/Dinsstore/fashion.html">
                        <font color="white">Fashion</font>
                    </a>

                    <br><br>

                    <a href="/Dinsstore/gaming.html">
                        <font color="white">Gaming</font>
                    </a>

                    <br><br>

                    <a href="/Dinsstore/profil.html">
                        <font color="white">Profil</font>
                    </a>

                    <br><br>

                    <a href="/Dinsstore/kontak.html">
                        <font color="white">Kontak</font>
                    </a>

                    <br><br>

                    <a href="form.html">
                        <font color="white">Pendaftaran</font>
                    </a>

                    <br><br>

                    <a href="data.php">
                        <font color="yellow">Data pendaftar</font>
                    </a>

                </font>

            </td>

            <td valign="top" bgcolor="#fffdf5">

                <table width="100%" border="1" cellpadding="5" bgcolor="#ecf0f1">
                    <tr>
                        <td>
                            <?php
                            if ($cek) {
                                echo "<font color='green'><b>Koneksi berhasil</b></font>";
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
                                    <font color="#c0392b">
                                        DATA PENDAFTAR
                                    </font>
                                </h2>

                                <hr>

                                <table border="1" cellpadding="8" width="100%" style="border-collapse: collapse;">
                                    <tr bgcolor="#2c3e50">
                                        <th><font color="white">No</font></th> <th><font color="white">Nama</font></th>
                                        <th><font color="white">Sekolah</font></th>
                                        <th><font color="white">Jurusan 1</font></th>
                                        <th><font color="white">Aksi</font></th>
                                    </tr>

                                    <?php 
                                    // Memeriksa apakah query berhasil dan ada datanya
                                    if ($data && mysqli_num_rows($data) > 0) {
                                        $no = 1; // 1. MEMBUAT VARIABEL UNTUK NOMOR URUT AWAL
                                        while($d = mysqli_fetch_array($data)){ 
                                    ?>
                                    <tr>
                                        <td align="center"><?= $no++; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['sekolah']; ?></td>
                                        <td><?= $d['jur1']; ?></td>
                                        <td align="center">
                                            <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
                                            |
                                            <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin hapus data?')">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                    <?php 
                                        } // Penutup loop while
                                    } else { // Jika data kosong
                                    ?>
                                    <tr>
                                        <td colspan="5" align="center">Belum ada data pendaftar.</td>
                                    </tr>
                                    <?php 
                                    } // Penutup blok if-else pendaftar
                                    ?>
                                </table>

                                <br>
                                <a href="form.html">
                                    &laquo; Kembali ke Form
                                </a>

                            </font>

                        </td>
                    </tr>
                </table>

            </td>

        </tr>

    </table>

</body>

</html>