<?php
    $con = mysqli_connect("localhost:3308","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error($con));
    }
    mysqli_select_db($con, "lat_dbase");
    mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
    VALUES ('Karina', 'Suwandi', '29')");
    mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
    VALUES ('Glenn', 'Gandari', '32')");
    mysqli_close($con);
?> 