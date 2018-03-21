<?php
include 'credentials.php';

$col1 = $_GET['col1'];
$col2 = $_GET['col2'];
$col3 = $_GET['col3'];
$col4 = $_GET['col4'];

echo $col1,$col2,$col3,$col4;
$sqlInsert = "INSERT INTO `try`(`name`,`col1`, `col2`, `col3`, `col4`) VALUES ('try','$col1','$col2','$col3','$col4');";

$conn->query($sqlInsert);

