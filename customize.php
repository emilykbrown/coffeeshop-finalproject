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

<div style="background-color: white;"><h1>Navbar here later</h1></div>

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
								<img src="assets/images/macchiato_placeholder.jpg">
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