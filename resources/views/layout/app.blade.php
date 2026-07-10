<!DOCTYPE html>
<html>
<head>
    <title>029 DIANA INDAH</title>
</head>

<body bgcolor="#fff8f0">

    <!-- HEADER UTAMA -->
    <table width="100%" bgcolor="#c0392b">
        <tr>
            <td align="center">
                <font face="Arial" size="7" color="white">
                    TUGAS PEMROGRAMAN WEB
                </font>
                <br>
                <font face="Arial" size="5" color="#ffdddd">
                    029 DIANA INDAH
                </font>
            </td>
        </tr>
    </table>

    <br>

    <!-- BODY LAYOUT UTAMA -->
    <table border="1" width="100%" cellpadding="6">
        <tr>
            
            <!-- SIDEBAR KIRI -->
            <td width="150" valign="top" bgcolor="#2c3e50">
                <font face="Arial" size="4" color="yellow">
                    MENU
                </font>
                <br><br>
                
                <font face="Arial" size="3">
                    <!-- Beranda mengarah ke halaman utama Laravel -->
                    <a href="{{ url('/') }}">
                        <font color="white">Beranda</font>
                    </a>
                    <br><br>

                    <!-- Manga mengarah ke halaman daftar komik Laravel -->
                    <a href="{{ url('/komik') }}">
                        <font color="white">Komik</font>
                    </a>
                    <br><br>

                    <!-- UTS mengarah ke halaman bingkai UTS Laravel -->
                    <a href="{{ url('/uts') }}">
                        <font color="white">UTS</font>
                    </a>
                    <br><br>

                    <!-- UAS langsung mengarah ke toko native di xampp -->
                    <a href="{{ url('Dinsstore') }}" 
                    style="color: white !important; text-decoration: none !important;">UAS
                    </a>
                </font>
            </td>

            <!-- KONTEN UTAMA SEBELAH KANAN (Tempat isi welcome.blade.php/komik/uts dimuat) -->
            <td valign="top" bgcolor="#fffdf5"> 
                <font face="Arial"> 
                    
                    <!-- Isian dinamis dari file blade lain masuk di sini -->
                    @yield('content')
                    
                </font>
            </td>

        </tr>
    </table>

</body>
</html>