<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "videojatek_katalogus";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Sikertelen csatlakozás!";
}