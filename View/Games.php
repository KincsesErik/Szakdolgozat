<!DOCTYPE html>
<html>
<head>
	<title>A Jéték Neve</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/rate.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<!-- Bal oldal: Borítókép -->
			<div class="col-12 col-md-4 mb-4">
				<img src="assets/images/game_cover.jpg" class="img-fluid" alt="Game Cover">
			</div>
			<!-- Jobb oldal: Játékinformációk -->
			<div class="col-12 col-md-8">
				<h1 style="text-align: right;">Játék Neve</h1>
				<p style="text-align: right;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id orci ut justo scelerisque rhoncus at vel dolor. Nam venenatis lobortis orci, vel pretium nulla hendrerit sit amet. Duis elementum fringilla eros, at accumsan est facilisis eget. Pellentesque blandit, velit in scelerisque consectetur, odio purus volutpat nulla, eu feugiat leo nulla id est. Praesent congue orci vel consectetur lobortis. Nulla sed ex metus. Donec vel imperdiet orci, vitae finibus nulla. Maecenas sagittis diam sed magna vestibulum euismod.</p>
				<fieldset class="rating" style="text-align: right;">
					<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" ></label>
					<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
					<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
					<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2"></label>
					<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>
				</fieldset>
				<div style="text-align: center;">
					<table class="table mt-4" style="border: 2px solid black; padding: 10px;">
						<thead>
							<tr>
								<th scope="col">Bolt neve</th>
								<th scope="col">Ár</th>
								<th scope="col">Link</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="border: 1px solid black;">Gamestore</td>
								<td style="border: 1px solid black;"><a href="https://www.gamestore.hu/">https://www.gamestore.hu/</a></td>
                                <td style="border: 1px solid black;">10 000 Ft</td>
							</tr>
							<tr>
								<td style="border: 1px solid black;">Steam</td>							
								<td style="border: 1px solid black;"><td><a href="https://store.steampowered.com/">https://store.steampowered.com/</a></td>
                                <td style="border: 1px solid black;">9 999 Ft</td>
                            </tr>
                            <tr>
								<td style="border: 1px solid black;">Green Man Gaming</td>
								<td style="border: 1px solid black;">8 999 Ft</td>
								<td style="border: 1px solid black;"><td><a href="https://www.greenmangaming.com/">https://www.greenmangaming.com/</a></td>
                            </tr>

				</table>
			</div>
		</div>
</html>