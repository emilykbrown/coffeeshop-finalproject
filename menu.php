<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='assets/css/bootstrap.min.css' rel="stylesheet">
 	<script src="assets/js/all.min.js"></script>
 	<link rel="stylesheet" href="assets/css/all.min.css">
	<title>Our Menu</title>
	<style type="text/css">
		.error {color: #fa0202}
	body {
  	background-image: url('assets/images/coffee-bg.jpg');
  	background-repeat: no-repeat;
  	background-attachment: fixed;  
  	background-size: cover;
	}
	</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand mb-0 h3" style="text-indent: 25px;" href="#">The Artists' Grounds</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
    	<li>
      		<a class="nav-item nav-link" href="index.php">Home</a>
      	</li>
      	<li>
      		<a class="nav-item nav-link active" href="menu.php">Menu</a>
      	</li>
      	<li>
      		<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Events</a>
      	</li>
      	<li>
      		<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Gallery</a>
      	</li>
      	<li>
      		<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Meet The Artists</a>
      	</li>
    </ul>
    <ul class="navbar-nav ms-auto flex-row">
        <li class="nav-item">
            <a class="nav-item nav-link justify-content-end" href="login.php">Log in</a>
        </li>
        <li class="nav-item">
            <a class="nav-item nav-link justify-content-end" href="signup.php">Sign up</a>
        </li>
      </ul>

	
</nav>
<br>

<div class="container-fluid">

	<div class="card shadow p-3 rounded">

		
		<p class="text-left"><b><font size="+3">Our Menu</font></b></p>
		<div class="card-body">

			<div class="container-fluid">

				<div class="row">
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Latte</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/latte.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Velvety steamed milk poured over rich espresso for a smooth, creamy pick-me-up. A comforting classic that’s perfect any time of day.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>				
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Cappuccino</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/cappuccino.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Bold espresso meets fluffy milk foam in this café favorite. Light, airy, and full of flavor in every sip.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Mocha</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/mocha.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Indulge in a luscious blend of chocolate and espresso topped with silky steamed milk. Like dessert in a cup with a caffeine kick.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Americano</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/americano.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Smooth, bold, and beautifully simple. Enjoy espresso topped with hot water for a clean, full-bodied taste. A no-frills favorite for true coffee lovers.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>				
						</div>
					</div>
				</div>

				<br>

				<div class="row">
					
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Dark Roast</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/darkroast.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Deep, robust flavor with a smoky finish. This bold brew delivers an intense coffee experience that lingers.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Light Roast</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/lightroast.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Bright, aromatic, and delightfully smooth. A fresh, vibrant roast that awakens the senses.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Espresso</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/espresso.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Small but mighty—this concentrated shot of coffee is pure energy and flavor. Perfect solo or as a base for your favorite drinks.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>				
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Hot Chocolate</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/hotchocolate.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Rich, creamy, and made for cozy moments. A warm, chocolatey treat that’s sure to satisfy any sweet tooth.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>
						</div>
					</div>
				</div>

				<br>

				<div class="row">
					
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Chai Latte</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/chailatte.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Spiced black tea swirled with steamed milk and sweetened to perfection. A soul-warming blend of exotic flavors and creamy comfort.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Matcha Latte</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/matchalatte.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Earthy Japanese matcha blended with smooth, steamed milk for a clean, energizing drink. A refreshing twist on your daily routine.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>				
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Earl Grey Tea</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/earlgrey.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									A timeless black tea infused with fragrant bergamot citrus. Elegant, aromatic, and always in style.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow p-3 rounded">
							<p class="text-left"><b><font size="+2">Green Tea</font></b></p>
							<div class="row">
								<div class="col">
									<img src="assets/images/greentea.png" class="" style="width:200px;height:200px;">
								</div>
								<div class="col">
									Light, refreshing, and naturally soothing. This antioxidant-rich brew is a gentle way to recharge.
								</div>
							</div>
							<div class="container mt-3">
								<a class="btn btn-primary" href="customize.php" role="button">Add to Order  <i class="fas fa-coffee"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>

</body>

</html>