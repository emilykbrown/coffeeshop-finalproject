<?php

//right now all of the drink options are hard-coded, which could be problematic in the future

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='assets/css/bootstrap.min.css' rel="stylesheet">
 	<script src="assets/js/all.min.js"></script>
 	<link rel="stylesheet" href="assets/css/all.min.css">
	<title>Home</title>
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

	<div class="row">

		<div class="col">		
			<div class="card shadow p-3 rounded">

				<p class="text-left"><b><font size="+5">Customize Your Drink</font></b></p>

				<div class="card-body">
					<div class="container-fluid">
						<form>
						<div class="row">
							<div class="col">
								<img src="assets/images/latte-big.png">
							</div>
							<div class="col">
								<h3>Size & Milk:</h3>
								<div class="input-group input-group-lg">
									<select class="form-select from-select-lg mb-3" aria-label="Drink Size">
										<option selected>Choose a size:</option>
										<option value="small">Small</option>
										<option value="medium">Medium</option>
										<option value="large">Large</option>
										<option value="extralarge">Extra Large</option>
									</select>
								</div>
								<div class="input-group input-group-lg">
									<select class="form-select from-select-lg mb-3" aria-label="Milk Type">
										<option selected>Choose your milk:</option>
										<option value="2%">2% Milk</option>
										<option value="Almond">Almond Milk</option>
										<option value="Oat">Oat Milk</option>
										<option value="Skim">Skim Milk</option>
										<option value="Breve">Breve (Half % Half)</option>
										<option value="Coconut">Coconut Milk</option>
									</select>
								</div>

								<br>
								<h3>Syrups, Flavoring, and Toppings:</h3>

								<div class="row">
									<div class="col">
										<input type="checkbox" name="vanilla" id="vanilla"/>
										<label for="vanilla">Vanilla</label>
									</div>
									<div class="col">
										<input type="checkbox" name="caramel" id="caramel"/>
										<label for="caramel">Caramel</label>
									</div>
									<div class="col">
										<input type="checkbox" name="hazelnut" id="hazelnut"/>
										<label for="hazelnut">Hazelnut</label>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<input type="checkbox" name="cinnamon_dolce" id="cinnamon_dolce"/>
										<label for="cinnamon_dolce">Cinnamon Dolce</label>
									</div>
									<div class="col">
										<input type="checkbox" name="peppermint" id="peppermint"/>
										<label for="peppermint">Peppermint</label>
									</div>
									<div class="col">
										<input type="checkbox" name="dark_chocolate" id="dark_chocolate"/>
										<label for="dark_chocolate">Dark Chocolate</label>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<input type="checkbox" name="milk_chocolate" id="milk_chocolate"/>
										<label for="milk_chocolate">Milk Chocolate</label>
									</div>
									<div class="col">
										<input type="checkbox" name="white_chocolate" id="white_chocolate"/>
										<label for="white_chocolate">White Chocolate</label>
									</div>
									<div class="col">
										<input type="checkbox" name="whipped_cream" id="whipped_cream"/>
										<label for="whipped_cream">Whipped Cream</label>
									</div>
								</div>

								<br>
								<h3>Other Options:</h3>
								<input type="checkbox" name="iced" id="iced">
								<label for="iced">Iced</label>
								<br>
								<input type="checkbox" name="extra_espresso" id="extra_espresso">
								<label for="extra_espresso">Extra Espresso</label>

								<div class="container mt-3">
		    						<div class ="text-center">
		    							<button type="submit" class="btn btn-primary text-white">SUBMIT  <i class="fas fa-coffee"></i></button>
		    						</div>
		  						</div>

							</div>
						</div>
						</form>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>

</body>

</html>