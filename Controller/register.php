<?php
require 'Model/User.php';
$user= new Felhasznalo($db);

function __construct($db){
	$this->db=$db;
}

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;

	if(isset($_POST['name']) && isset($_POST['uname']) && isset($_POST['password'])){
		$user->registerUser($_POST['name'],$_POST['uname'],$_POST['password']);
	}


   
 /*    if (empty($uname)) {
		header("Location: ../View\Regisztracio.php?error=Felhasználónév kötelező&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../View\Regisztracio.php?error=A jelszó kötelező&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: ../View\Regisztracio.php?error=A jelszó megerősítés szükséges&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: ../View\Regisztracio.php?error=A név kötelező&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: ../View\Regisztracio.php?error=A két jelszó nem egyezik meg&$user_data");
	    exit();
	} */

	//else{

        // jelszó titkosítás

	
		/*if (mysqli_num_rows($result) > 0) {
			header("Location: ../View\Regisztracio.php?error=A felhasználónév foglalt, kérlek válassz másikat&".$user_data);
	        exit();
		}else {
           $sql2 = "INSERT INTO felhasznalo(felhasznalonev, jelszo, nev) VALUES('$uname', '$pass', '$name')";
           
           if ($result2) {
           	 header("Location: ../View\Regisztracio.php?success=A fiókod sikeresen létrehozva!");
	         exit();
           }else {
	           	header("Location: ../View\Regisztracio.php?error=Valamiért nem sikerült regisztrálni, próbáld újra&".$user_data);
		        exit();
           }
		}
	}*/
	
/*}else{
	header("Location: ../View\Regisztracio.php");
	exit();
}*/
	}
require 'View/Regisztracio.php';
