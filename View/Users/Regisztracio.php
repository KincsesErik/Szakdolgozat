<!DOCTYPE html>
<html>
<head>
	<title>Regisztráció</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
     <form action="../../Controller\register.php" method="post">
     	<h2>Regisztráció</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		 <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


		 <label>Név</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Név"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="name" placeholder="Név"><br>
          <?php }?>

		 <label>Felhasználónév</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"  name="uname"  placeholder="Felhasználónév"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="uname"  placeholder="Felhasználónév"><br>
          <?php }?>

     	<label>Jelszó</label>
     	<input type="password" name="password" placeholder="Jelszó"><br>

         <label>Jelszó újra</label>
     	<input type="password" name="re_password" placeholder="Jelszó újra"><br>

     	<button type="submit">Regisztráció</button>
         <a href="Bejelentkezes.php" class="ca">Csináltál már fiókot?</a>
     </form>
	 <?php	
	 ?>
</body>
</html>