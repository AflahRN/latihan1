@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="../style_layout.css">
<link rel="stylesheet" href="../style_cv.css">
<section>
<div class="konten">
    <table class="main_table">
        <form action ="insert.php" method="post">
            <tr>
                <td class="background_kiri">
                    <div>
                        <table>
                            <tr>
                                <th colspan="4">
                                    <h1>Form Biodata</h1>
                                </th>
                            </tr>
                            <tr>
                                    <td>
                                        <label for="nama">Nama</label>
                                    </td>
                                    <td>
                                        <input type="text" name="nama" id="nama" placeholder="cth:Zhafran" size="30"><br>
                                    </td>
                                    <td>
                                        <label for="instagram">Instagram</label>
                                    </td>
                                    <td>
                                        <input type="text" name="instagram" id="instagram" placeholder="cth:example.123" size="30">
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="4">
                                        <label for="pkeahlian">Program Keahlian</label>
                                    </td>
                                    <td>
                                        <input type="radio" name="pkeahlian" id="pkeahlian" value="RPL">
                                        <label for="pkeahlian">RPL</label><br>
                                    </td>
                                    <td>
                                        <label for="facebook">Facebok</label>
                                    </td>
                                    <td>
                                        <input type="text" name="facebook" id="facebook" placeholder="cth:example.123" size="30">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="pkeahlian" id="pkeahlian" value="TKJ">
                                        <label for="pkeahlian">TKJ</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="pkeahlian" id="pkeahlian" value="AM">
                                        <label for="pkeahlian">AM</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="pkeahlian" id="pkeahlian" value="DKV">
                                        <label for="pkeahlian">DKV</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">
                                        <label>Jenis Kelamin</label>
                                    </td>
                                    <td>
                                        <input type="radio" id="jkelamin" name="jkelamin" value="laki-laki">
                                        <label for="jkelamin">Laki-laki</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" id="jkelamin" name="jkelamin" value="perempuan">
                                        <label for="jkelamin">Perempuan</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="6">
                                        <label>Agama</label>
                                    </td>
                                    <td>
                                        <input type="radio" id="agama" name="agama" value ="Islam">
                                        <label for="agama">Islam</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" id="agama" name="agama" value ="Kristen Protestan">
                                        <label for="agama">Kristen Protestan</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" id="agama" name="agama" value ="Kristen Katolik">
                                        <label for="agama">Kristen Katolik</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" id="agama" name="agama" value ="Hindu">
                                        <label for="agama">Hindu</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" id="agama" name="agama" value ="Buddha">
                                        <label for="agama">Buddha</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" id="agama" name="agama" value ="Konghucu">
                                        <label for="agama">Konghucu</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="notelepon">No.Telepon</label>
                                    </td>
                                    <td>
                                        <input type="tel" name="notelepon" id="notelepon" placeholder="Masukan No.Telepon" size="30"><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="email">Email</label>
                                    </td>
                                    <td>
                                        <input type="email" name="email" id="email" placeholder="cth:example@gmail.com" size="30"><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="alamat">Alamat</label>
                                    </td>
                                    <td>
                                        <input type="text" name="alamat" id="alamat" placeholder="cth:Bandung" size="30"><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="padding-left: 48%;">
                                        <input type="submit">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </td>
            </tr>
        </form>
    </table>
</div>
</section>
@stop