<?php 

require 'Model/User.php';
$user= new Felhasznalo($db);

$loginResult = "";

$action = "";

$action = $_REQUEST['action'] ?? "";

$loginReaction = array(
	"Sikertelen bejeltkezés: Nincs ilyen felhasználónév",
	"Sikertelen bejeltkezés: Rossz jelszó",
	"Sikeres bejelentkezés",
	
);

switch ($action){
	case 'logout':
		session_unset();
		$loginResult = "Sikeresen Kijelentkeztél!";
		header("Location: index.php?page=index");
			exit();
	break;

	case 'login':
		if(isset($_POST['uname']) && isset($_POST['password'])){

		$login = $user->checkLogin($_POST['uname'], $_POST['password']);

		$loginResult = $loginReaction[$login];

		echo $loginResult . "<br>";


		if($login == 2) {
			header("Location: index.php?page=index");
			exit();
		}

		}
		
	break;
}
//print_r($_SESSION);
require 'View/Bejelentkezes.php';
