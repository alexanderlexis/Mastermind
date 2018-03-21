<?php
$ser = "localhost";
$dab = "mastermind";
$usn = "root";
$psw = "";



$conn = mysqli_connect($ser, $usn, $psw, $dab);

$col1 = $_GET['col1'];
$col2 = $_GET['col2'];
$col3 = $_GET['col3'];
$col4 = $_GET['col4'];

