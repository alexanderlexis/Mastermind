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
echo $col1,$col2,$col3,$col4;
$sqlInsert = "INSERT INTO `master`(`name`,`col1`, `col2`, `col3`, `col4`) VALUES ('Master','$col1','$col2','$col3','$col4');";

$conn->query($sqlInsert);

