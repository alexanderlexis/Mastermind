<?php
$ser = "localhost";
$dab = "mastermind";
$usn = "root";
$psw = "";

$col1 = $_GET['mcol1'];
$col2 = $_GET['mcol2'];
$col3 = $_GET['mcol3'];
$col4 = $_GET['mcol4'];

$conn = mysqli_connect($ser, $usn, $psw, $dab);
$sqlUpdate = "UPDATE `master` SET `col1`='$col1',`col2`='$col2',`col3`='$col3',`col4`='$col4' WHERE 1;";
echo $sqlUpdate;
$conn->query($sqlUpdate);

//UPDATE `master` SET `col1`=$col1,`col2`=$col2,`col3`=$col3,`col4`=$col4 WHERE 1;
//UPDATE `master` SET `col1`=[value-3],`col2`=[value-4],`col3`=[value-5],`col4`=[value-6] WHERE 1