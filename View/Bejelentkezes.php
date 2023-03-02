<!DOCTYPE html>
<html>
<head>
	<title>Bejelentkezés</title>
	<link rel="stylesheet" type="text/css" href="assets\css\loginstyle.css">
</head>
<body>
	<form action="index.php" method="post">
     	<h2>Bejelentkezés</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Felhasználónév</label>
     	<input type="text" name="uname" placeholder="Felhasználónév"><br>

     	<label>Jelszó</label>
     	<input type="password" name="password" placeholder="Jelszó"><br>

     	<button type="submit">Bejelentkezés</button>
		 <a href="index.php?page=register" class="ca">Regisztráció</a>
     </form>
</body>
</html>