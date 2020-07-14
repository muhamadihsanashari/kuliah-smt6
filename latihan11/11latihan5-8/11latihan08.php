<?php
$con = mysqli_connect("localhost:3308","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_error($mysqli));
 }
mysqli_select_db($con,"lat_dbase");
$sql="INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysqli_query($con,$sql))
 {
 die('Error: ' . mysqli_error($mysqli));
 }
echo "1 record added";
mysqli_close($con)
?>