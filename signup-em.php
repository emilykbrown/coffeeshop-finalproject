<?php

include 'config/variables.php';

//include 'fetches/fetchSignup.php';

?>
<!DOCTYPE html>
<html>
<head>
	<?php
	
	include "modules/header.php";

	?>
</head>

<body>
<?php 

include "modules/navbar.php";

?>
 <div class="container">
    <div class="signup-form">

        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <span class="error">
                <?php echo $emailError; ?>
            </span>
            <div class="mb-3 mt-3">
                <label for="upass" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <span class="err">
                <?php echo $passwordError; ?>
            </span>
            <div class="mb-3 mt-3">
                <label for="cpass" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirmPasswordError" placeholder="Confirm password" name="confirmPasswordError">
    </div>
    <span class="err">
        <?php echo $confirmPasswordError; ?>
    </span>
    <div class="mb-3 mt-3">
        <div class="form-check">
            <input class="form-check-input newsletter" type="checkbox" value="" id="newsletter">
            <label class="form-check-label" for="newsletter">
                Sign up for our newsletter
            </label>
        </div>
        <div class="mb-3 mt-3">
            <div class="text-center">
                <button type="submit" class="btn btn-dark" name="signup">Sign up</button>
            </div>
        </div>
    </div>
</form>
</div>
  </div>
  <?php include 'modules/js-scripts.php'; ?>
  </html>