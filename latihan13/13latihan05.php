<?php
include "koneksi.php";
$time=date("Y-m-d H:i:s");
$articleID = (isset($_POST['articleID']));
$title = (isset($_POST['title']));
$author = (isset($_POST['author']));
$abstraksi = (isset($_POST['abstraksi']));
$content = (isset($_POST['content']));
//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);
$update="UPDATE articles SET judul='$title', penulis='$author',
lead='$abstraksi',
content='$content', waktu='$time' WHERE articleID ='$articleID'";
$hasil=mysqli_query($con,$update);
if ($hasil) {
echo "Artikel berhasil di update<br>";
echo "<a href=\"tampil.php\">List</a>";
} else {
echo "Artikel gagal di update";
}
?>