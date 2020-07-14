<?php
include "koneksi.php";
$articleID = $_GET['articleID'];
$perintah="DELETE FROM articles WHERE articleID =\"$articleID\"";
$hasil= mysqli_query ($con, $perintah);
if ($hasil) {echo "Artikel berhasil dihapus<br>";
echo "<a href=\"13latihan04.php\">Back</a>";
} else {
echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
ke database MySQL.";
}
?>