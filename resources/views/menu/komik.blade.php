@extends('layout.app')

@section('content')
                <table border="1" cellpadding="10" cellspacing="0" width="100%" style="border-collapse: collapse; border-color: #ddd;"> 
                    <tr bgcolor="#c0392b"> 
                        <th><font color="white">Gambar</font></th> 
                        <th><font color="white">Judul</font></th> 
                        <th><font color="white">Harga</font></th> 
                        <th><font color="white">Keterangan</font></th> 
                    </tr> 
             
                    <tr bgcolor="#fff5f5"> 
                        <td align="center"> 
                            <img src="{{ asset('images/yotsuba.jpeg') }}" alt="Yotsuba" width="80" height="110"> 
                        </td> 
                        <td><font size="3">Youtsuba Vol. 1</font></td> 
                        <td><font size="3" color="#c0392b">Rp 45.000</font></td> 
                        <td><font size="2">Manga karya Kiyohiko Azuma.</font></td> 
                    </tr> 
             
                    <tr bgcolor="#ffffff"> 
                        <td align="center"> 
                            <img src="{{ asset('images/naruto.jpeg') }}" alt="Naruto" width="80" height="110"> 
                        </td> 
                        <td><font size="3">Naruto Vol. 72</font></td> 
                        <td><font size="3" color="#c0392b">Rp 27.000</font></td> 
                        <td><font size="2">Manga karya Masashi Kishimoto. Volume terakhir petualangan Naruto Uzumaki.</font></td> 
                    </tr> 
             
                    <tr bgcolor="#fff5f5"> 
                        <td align="center"> 
                            <img src="{{ asset('images/AOT.jpeg') }}" alt="Attack on Titan" width="80" height="110"> 
                        </td> 
                        <td><font size="3">Attack on Titan Vol. 34</font></td> 
                        <td><font size="3" color="#c0392b">Rp 35.000</font></td> 
                        <td><font size="2">Manga karya Hajime Isayama. Volume finale epik perang melawan titan.</font></td> 
                    </tr> 
             
                    <tr bgcolor="#ffffff"> 
                        <td align="center"> 
                            <img src="{{ asset('images/demon.jpeg') }}" alt="Demon Slayer" width="80" height="110"> 
                        </td> 
                        <td><font size="3">Demon Slayer Vol. 23</font></td> 
                        <td><font size="3" color="#c0392b">Rp 32.000</font></td> 
                        <td><font size="2">Manga karya Koyoharu Gotouge. Tanjiro berjuang membasmi iblis demi adiknya.</font></td> 
                    </tr> 
             
                    <tr bgcolor="#fff5f5"> 
                        <td align="center"> 
                            <img src="{{ asset('images/lookback.jpg') }}" alt="LockBack" width="80" height="110"> 
                        </td> 
                        <td><font size="3">LockBack</font></td> 
                        <td><font size="3" color="#c0392b">Rp 40.000</font></td> 
                        <td><font size="2">Oneshot karya Tatsuki Fujimoto</font></td> 
                    </tr> 
             
                    <tr bgcolor="#ffffff"> 
                        <td align="center"> 
                            <img src="{{ asset('images/spy.jpeg') }}" alt="Spy x Family" width="80" height="110"> 
                        </td> 
                        <td><font size="3">Spy x Family Vol. 12</font></td> 
                        <td><font size="3" color="#c0392b">Rp 30.000</font></td> 
                        <td><font size="2">Manga karya Tatsuya Endo. Keluarga pura-pura yang penuh aksi dan komedi!</font></td> 
                    </tr> 
                </table> 
             
                <br>
                <a href="{{ url('/') }}" style="text-decoration: none; color: #c0392b; font-weight: bold;">
                    &laquo; Kembali ke Beranda Utama
                </a>
            </td>
        </tr>
    </table>
@endsection