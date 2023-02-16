<!DOCTYPE html>
<html>
<head>
	<title>Bejelentkezés</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
     <form action="../../Controller\login.php" method="post">
     	<h2>Bejelentkezés</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Felhasználónév</label>
     	<input type="text" name="uname" placeholder="Felhasználónév"><br>

     	<label>Jelszó</label>
     	<input type="password" name="password" placeholder="Jelszó"><br>

     	<button type="submit">Bejelentkezés</button>
		 <a href="index.php?page=Main" class="ca">Regisztráció</a>
     </form>
</body>
</html>