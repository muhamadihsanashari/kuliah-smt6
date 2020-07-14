<!DOCTYPE html>

<html>

<head>
    <title>UTS PEMROGRAMAN WEB 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div id="kotak">
        <h3>Form Data Pasien <b style="color:blue;">COVID-19</b></h3>
        <form action="form.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Wilayah</td>
                    <td class="adalah">:</td>
                    <td>
                        <select name="wilayah" required>
                            <option value="">Pilih Wilayah</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Positif</td>
                    <td class="adalah">:</td>
                    <td><input type="text" name="positif" placeholder="Jumlah Positif" required /></td>
                </tr>
                <tr>
                    <td>Jumlah Dirawat</td>
                    <td class="adalah">:</td>
                    <td><input type="text" name="dirawat" placeholder="Jumlah Dirawat" /></td>
                </tr>
                <tr>
                    <td>Jumlah Sembuh</td>
                    <td class="adalah">:</td>
                    <td><input type="text" name="sembuh" placeholder="Jumlah Sembuh" /></td>
                </tr>
                <tr>
                    <td>Jumlah Meninggal</td>
                    <td class="adalah">:</td>
                    <td><input type="text" name="meninggal" placeholder="Jumlah Meninggal" /></td>
                </tr>
                <tr>
                    <td>Nama Operator</td>
                    <td class="adalah">:</td>
                    <td><input type="text" name="nama_operator" placeholder="Nama Anda" /></td>
                </tr>
                <tr>
                    <td>NIM Mahasiswa</td>
                    <td class="adalah">:</td>
                    <td><input type="text" name="nim" placeholder="NIM Anda" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>&nbsp;&nbsp;<input type="submit" name="kirim" value="Simpan" />
                            &nbsp;<input type="reset" name="del" value="Hapus" /></td>

                </tr>
            </table>

        </form>
    </div>
    <div id="kotak2">

        <?php
        $file = "db.html";
        $fp = fopen($file, "r");

        while (!feof($fp)) {
            $baca = fgets($fp, 50);
            print("$baca");
        }
        fclose($fp);
        ?>


</body>

</html>