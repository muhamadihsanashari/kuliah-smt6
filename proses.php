<?php
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    echo "
    <table width="400" border="1" align="center">
        <tr>
            <td colspan=3 align=center> .: IDENTITAS SISWA :. </td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>".$nis."</td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td>".$nama."</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>".$alamat."</td>
        </tr>
    </table>";
?>