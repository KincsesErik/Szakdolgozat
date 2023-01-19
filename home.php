<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['felhasznalonev'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['nev']; ?></h1>
     <a href="logout.php">Kijelentkezés</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>