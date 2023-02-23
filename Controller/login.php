<?php 
session_start(); 
include "db_inc.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: View\Bejelentkezes.php?error=Felhasználónév szükséges");
	    exit();
	}else if(empty($pass)){
        header("Location: View\Bejelentkezes.php?error=Jelszó szükséges");
	    exit();
	}else{

		//jelszó titkosítás
		$pass = md5($pass);
		
		$sql = "SELECT * FROM felhasznalo WHERE felhasznalonev='$uname' AND jelszo='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['felhasznalonev'] === $uname && $row['jelszo'] === ($pass)) {
            	$_SESSION['felhasznalonev'] = $row['felhasznalonev'];
            	$_SESSION['nev'] = $row['nev'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../View\Index\home.php");
		        exit();
            }else{
				header("Location: View\Bejelentkezes.php?error=Helytelen felhasználónév vagy jelszó");
		        exit();
			}
		}else{
			header("Location: View\Bejelentkezes.php?error=Helytelen felhasználónév vagy jelszó");
	        exit();
		}
	}
	
}else{
	header("Location: View\Bejelentkezes.php");
	exit();
}