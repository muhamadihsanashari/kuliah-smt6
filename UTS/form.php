<?php
$wilayah = $_POST['wilayah'];
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];
$nama = $_POST['nama_operator'];
$nim = $_POST['nim'];
$waktu = date("d F Y | H:i:s");

$nf = "db.html";
$fp = fopen($nf, "r+");
$data = fgets($fp, 50);
$comfile = file($nf);

rewind($fp);
fwrite(
    $fp,
    "<p>Data Pemantauan Covid-19 wilayah $wilayah</p>
		<p>Per $waktu</p>
		<p>$nama/$nim</p><br>
		<table class='table1'>
			<tr>
				<td>Positif</td>
				<td>Dirawat</td>
				<td>Sembuh</td>
				<td>Meninggal</td>
			</tr>
			<tr>
				<td>$positif</td>
				<td>$dirawat</td>
				<td>$sembuh</td>
				<td>$meninggal</td>
			</tr>
		</table>
		<br>"
);

for ($i = 0; $i < 20; $i++) {
    fwrite($fp, $comfile[$i]);
}

fclose($fp);

if ($_POST['kirim']) {
    header("location: input.php");
}
