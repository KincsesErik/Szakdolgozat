<?php

class DataBase{
$sname= "localhost";
$uname= "c31kincsesdbu";
$password = "gyevFtJ9TX@E";

$db_name = "c31kincsesdb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Sikertelen csatlakozás!";
}
}