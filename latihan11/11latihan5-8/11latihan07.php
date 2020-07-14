<?php
$mysqli = mysqli_connect("localhost:3308","root","");
mysqli_select_db($mysqli,"lat_dbase");
$hasil=mysqli_query($mysqli,"select * from tbl_mhs");
$hit=mysqli_num_rows($hasil);
echo "jumlah record $hit";
?> 