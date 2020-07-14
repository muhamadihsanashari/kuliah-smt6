<?php
$mysqli = mysqli_connect("localhost:3308","root","");
$dbname = "lat_dbase";
$cek = mysqli_query($mysqli,"CREATE DATABASE $dbname") or die("Couldn't Create Database:
$dbname");
if($cek){
 echo "Database $dbname berhasil dibuat";
}
?>