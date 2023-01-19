<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "videojatek_katalogus";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Sikertelen csatlakozás!";
}