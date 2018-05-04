<!DOCTYPE html>
<html>
<head>
	<title>Saved Trips</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-3.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBghm1BA7TPT0CrpP-d-qLC2MYn2UlXYZ8&libraries=places"></script>
	<style type="text/css">
		.card{
			margin: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php
        // checking for minimum PHP version
          if (version_compare(PHP_VERSION, '5.3.7', '<')) {
            exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
          } else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
            // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
            // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
            require_once("libraries/password_compatibility_library.php");
          }

          // include the configs / constants for the database connection
          require_once("config/db.php");

          // load the login class
          require_once("classes/Login.php");

        $login = new Login();
        // ... ask if we are logged in here:
        if ($login->isUserLoggedIn() == true) {
            echo("Hello ". $_SESSION['user_name'] .", <a style='align: right;' href='index.php' class='btn btn-success'> Create a new trip </a>
              <a style='align: right;' href='login.php?logout' class='btn btn-danger'> Logout </a>");

        } else {
            echo(" <a href='login.php' class='btn btn-success pull-right'> Login </a>
      <a href='register.php' class='btn btn-primary pull-right'>Register</a>");
        }

      ?>
    <br><br>
		<h3>Saved Trips</h3>
		<div class="row">
			<div class="card col-sm-5" style="width: 18rem;">
			  <div class="card-header">
			    Sangli to Goa
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			  <div class="card-body">
			    <a href="#" class="card-link">Card link</a>
			    <a href="#" class="card-link">Another link</a>
			  </div>
			</div>
			<div class="card col-sm-5" style="width: 18rem;">
			  <div class="card-header">
			    Sangli to Goa
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			  <div class="card-body">
			    <a href="#" class="card-link">Card link</a>
			    <a href="#" class="card-link">Another link</a>
			  </div>
			</div>

			<div class="card col-sm-5" style="width: 18rem;">
			  <div class="card-header">
			    Sangli to Goa
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			  <div class="card-body">
			    <a href="#" class="card-link">Card link</a>
			    <a href="#" class="card-link">Another link</a>
			  </div>
			</div>
		</div>
	</div>	
</body>
</html>