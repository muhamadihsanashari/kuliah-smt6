<?php
$dbhost = "localhost:3308";
$dbuser = "root";
$dbpass = "";
$dbname = "artikel_db";
//lakukan koneksi dengan mysql
$con = mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$con)
{
echo "Tidak dapat terhubung dengan database";
exit;
}
//pilih database
$pilih_db = mysqli_select_db($con,$dbname);
if(!$pilih_db)
{
echo "Tidak dapat memilih database";
exit;
}
?>