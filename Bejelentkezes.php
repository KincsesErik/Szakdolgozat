<!DOCTYPE html>
<html>
<head>
	<title>Bejelentkezés</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Bejelentkezés</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Felhasználónév</label>
     	<input type="text" name="uname" placeholder="Felhasználónév"><br>

     	<label>Jelszó</label>
     	<input type="password" name="password" placeholder="Jelszó"><br>

     	<button type="submit">Bejelentkezés</button>
     </form>
</body>
</html>