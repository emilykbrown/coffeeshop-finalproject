<?php

?>
<!DOCTYPE html>
<html>
<head>
	<?php
	
	include "modules/header.php";

	?>
	<script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
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
      		<a class="nav-item nav-link active" href="#">Home</a>
      	</li>
      	<li>
      		<a class="nav-item nav-link" href="menu.php">Menu</a>
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

		<div class="col-sm-3">
			<div class="card shadow p-3 rounded">
				<div class="card-body">
					<h5 class="card-title">Articles</h5>
					<br>
					<p>
						<strong>The Artists' Grounds rated top coffee shop in Minneapolis!</strong> | May 5th, 2025
						<br>
						Thank you all for your support! We can't believe that we made it! We will be hosting a small event this Friday with free coffee, cake, and music to celebrate!
					</p>
					<p>
						<strong>The April Art Awards</strong> | May 1st, 2025
						<br>
						Here are the winners for the April Art awards! It was a tough choice this month, there were so many great entries! We also would like to remind everyone that all forms of art are accepted! In the photography categ...
					</p>
					<p>
						<strong>Opening Ceremony</strong> | March 16th, 2025
						<br>
						Hello from Jesse and James here at The Artists' Grounds! Please join us on March 24th at 9:00am to celebrate our grand opening with us!
					</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6">		
			<div class="card shadow p-3 rounded">

				<div class="card-body">
					<h5 class="card-title">About Us</h5>
					<p>Welcome to The Artists' Grounds! We are a local coffee shop built to help blossoming artists get their feet off the ground. We offer handcrafted, bespoke coffee to order made with ethnically sourced coffee beans, and a portion of our profits goes towards our artists. We host events like book signings and auctions most weeks on Thursdays and Fridays! Please check our events calendar for more information. You can also visit the gallery page and the "meet the artists" page for more information about the artists we work with and see some of the art that we have for sale!
					</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>

			</div>
		</div>

		<div class="col sm-3">
			<div class="card shadow p-3 rounded">
				<div class="card-body">
					<div class="commonninja_component pid-31202c34-d7bd-473f-bfc8-5ab4881950cb"></div>
   				</div>
			</div>
		</div>

	</div>

</div>

</body>

</html>