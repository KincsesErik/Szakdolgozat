<?php 

require 'Model/User.php';
$user= new Felhasznalo($db);

$loginResult = "";

$action = "";

$action = $_REQUEST['action'] ?? "";

$loginReaction = array(
	"Login Failed: Wrong Username",
	"Login Failed: Wrong Password",
	"Login Successful",
);

switch ($action){
	case 'logout':
		session_unset();
		$loginResult = "Logged out Successful";
	break;

	case 'login':
		if(isset($_POST['uname']) && isset($_POST['password'])){

		$login = $user->checkLogin($_POST['uname'], $_POST['password']);

		$loginResult = $loginReaction[$login];

		echo $loginResult . "<br>";
		}
	break;
}
require 'View/Bejelentkezes.php';
