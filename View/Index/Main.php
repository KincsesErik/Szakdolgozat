<?php
    require_once '../Layout/header.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="sliderstyle.css">
	<title>CSS slideshow</title>
</head>
  <body>
	<div class="slider">
	<ul>
		<li>
			<div class="slidetitle"> 
				<span>Kung-Fu Panda</span>
			</div>
			<a href='#'>
				<img src="https://i.imgur.com/lwYJ4rx.jpg"/>
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
				<span>Up</span>
			</div>
			<a href='#'>
				<img src="https://i.imgur.com/WBTntRU.jpg"/>
			</a>
		</li>
		<li>
			<div class="slidetitle"> 
				<span>Calisto Protocol</span>
			</div>
			<a href='#'>
				<img src="../../images\callisto.jpg"/>
			</a>
		</li>
	</ul>
	</div>
		
</body>
</html>
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-4">
            <div class="card">
                <img alt="Card image cap" class="card-img-top" src="../../images\gamehaven.png">
                <div class="card-body">
                    <h5 class="card-title">játék neve</h5>
                    <p class="card-text"></p>
                    <a class="btn btn-primary" href="games.php">Megnézem</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <img alt="Card image cap" class="card-img-top" src="../../images\gamehaven.png">
                <div class="card-body">
                    <h5 class="card-title">játék neve</h5>
                    <p class="card-text"></p>
                    <a class="btn btn-primary" href="games.php">Megnézem</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <img alt="Card image cap" class="card-img-top" src="../../images\gamehaven.png">
                <div class="card-body">
                    <h5 class="card-title">játék neve</h5>
                    <p class="card-text"></p>
                    <a class="btn btn-primary" href="games.php">Megnézem</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../Layout/footer.php';
?>