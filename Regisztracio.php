<!DOCTYPE html>
<html>
<head>
	<title>Regisztráció</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Regisztráció</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Név</label>
     	<input type="text" name="uname" placeholder="Név"><br>

         <label>Felhasználónév</label>
     	<input type="text" name="uname" placeholder="Felhasználónév"><br>

     	<label>Jelszó</label>
     	<input type="password" name="password" placeholder="Jelszó"><br>

         <label>Jelszó újra</label>
     	<input type="password" name="re_password" placeholder="Jelszó újra"><br>
     	<button type="submit">Regisztráció</button>
     </form>
</body>
</html>