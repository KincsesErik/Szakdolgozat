<?php
    include 'Layout/header.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\sliderstyle.css">
	<title></title>
</head>
  <body>
	<div class="slider">
	<ul>
		<li>
			<div class="slidetitle"> 
				<span>Assassin's Creed Mirage</span>
			</div>
			<a href='#'>
				<img src="assets/images/acm.png"/>
			</a>
		</li>
		<li>
			<div class="slidetitle"> 
				<span>Toy Story</span>
			</div>
			<a href='#'>
				<img src="https://i.imgur.com/BjB65TS.jpg"/>
			</a>
		</li>
		<li>
			<div class="slidetitle"> 
				<span>Wall-E</span>
			</div>
			<a href='#'>
				<img src="https://i.imgur.com/nyettOe.jpg"/>
			</a>
		</li>
		<li>
			<div class="slidetitle"> 
				<span>God Of War</span>
			</div>
			<a href='#'>
				<img src="assets\images\gow.jpg"/>
			</a>
		</li>
		<li>
			<div class="slidetitle"> 
				<span>Calisto Protocol</span>
			</div>
			<a href='#'>
				<img src="assets\images\callisto.jpg"/>
			</a>
		</li>
		<li>
			<div class="slidetitle"> 
				<span>Elden Ring</span>
			</div>
			<a href='#'>
				<img src="assets\images\er.jpg"/>
			</a>
		</li>
		<li>
			<div class="slidetitle"> 
				<span>Rainbow Six Siege </span>
			</div>
			<a href='#'>
				<img src="assets\images\r6.jpg"/>
			</a>
		</li>
		<li>
			<div class="slidetitle"> 
				<span>Red Dead Redemption 2</span>
			</div>
			<a href='#'>
				<img src="assets\images\rd2.jpg"/>
			</a>
		</li>
	</ul>
	</div>
		
</body>
</html>

<br>

<h1>ㅤㅤㅤNeked Ajánlott <i style="font-size:24px" class="fa" title="Az ajánlások a felhasználói tevékenységi adatokon alapulnak, beleértve a termékmegtekintéseket, a kívánságlista-feltöltéseket. Bejelentkezéskor az ajánlások személyre szabottak; egyébként ugyanazon országból származó felhasználók adatain alapulnak">&#xf017;</i></h1>

<div class="container">
    <link rel="stylesheet" type="text/css" href="assets\css\cards.css">

    <div class="row mt-5">
        <?php
        for ($i = 0; $i < 4; $i++) {
            echo '<div class="col-12 col-md-3 mb-4">
                    <div class="card">
                        <a href="View\Games.php">
                            <img alt="Card image cap" class="card-img-top" src="assets\images\gamehaven.png">
                            <div class="card-body">
                            </a>
                                <h5 class="card-title">Játék Neve</h5>
                                <p class="card-text"></p>
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" ></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>
                                </fieldset>
                            </div>
                        
                    </div>
                </div>';
        }
        ?>
    </div>
</div>



<hr>
<br>

<h1>ㅤㅤㅤTOP játékok <i style="font-size:24px" class="fa" title="Javaslatok a felhasználók által legjobbra értékelt termékeken alapulnak">&#xf017;</i></h1>

<div class="container">
    <link rel="stylesheet" type="text/css" href="assets\css\cards.css">

    <div class="row mt-5">
        <?php
        for ($i = 0; $i < 8; $i++) {
            echo '<div class="col-12 col-md-3 mb-4">
                    <div class="card">
                        <img alt="Card image cap" class="card-img-top" src="assets\images\gamehaven.png">
                        <div class="card-body">
                            <h5 class="card-title">Játék Neve</h5>
                            <p class="card-text"></p>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" ></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>
                            </fieldset>
                        </div>
                    </div>
                </div>';
        }
        ?>

        <?php
        if (isset($_GET['show_more'])) {
            for ($i = 0; $i < 8; $i++) {
                echo '<div class="col-12 col-md-3 mb-4">
                        <div class="card">
                            <img alt="Card image cap" class="card-img-top" src="assets\images\gamehaven.png">
                            <div class="card-body">
                                <h5 class="card-title">Játék Neve</h5>
                                <p class="card-text"></p>
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" ></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>
                                </fieldset>
                            </div>
                        </div>
                    </div>';
            }
        }
        ?>

    </div>

    <button type="button" onclick="window.location.href='?show_more=true'" class="btn btn-primary"button style="display: block; margin: 0 auto;">További Játékok Betöltése</button>
</div>

<hr>
<br>

<h1>ㅤㅤㅤKözelgő játékok <i style="font-size:24px" class="fa" title="Mostanába megjelent, vagy a jövőben megjelenő termékeken alapulnak">&#xf017;</i></h1>

<div class="container">
    <link rel="stylesheet" type="text/css" href="assets\css\cards.css">

    <div class="row mt-5">
        <?php
        for ($i = 0; $i < 4; $i++) {
            echo '<div class="col-12 col-md-3 mb-4">
                    <div class="card">
                        <img alt="Card image cap" class="card-img-top" src="assets\images\gamehaven.png">
                        <div class="card-body">
                            <h5 class="card-title">Játék Neve</h5>
                            <p class="card-text"></p>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" ></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>
                            </fieldset>
                        </div>
                    </div>
                </div>';
        }
        ?>

        <?php
        if (isset($_GET['show_more1'])) {
            for ($i = 0; $i < 4; $i++) {
                echo '<div class="col-12 col-md-3 mb-4">
                        <div class="card">
                            <img alt="Card image cap" class="card-img-top" src="assets\images\gamehaven.png">
                            <div class="card-body">
                                <h5 class="card-title">Játék Neve</h5>
                                <p class="card-text"></p>
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" ></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>
                                </fieldset>
                            </div>
                        </div>
                    </div>';
            }
        }
        ?>

    </div>

    <button type="button" onclick="window.location.href='?show_more1=true'" class="btn btn-primary"button style="display: block; margin: 0 auto;">További Játékok Betöltése</button>
</div>


<?php
    include 'Layout/footer.php';
?>