<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Road Trip Planner</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBygxeV-oz78Ea1RRelQzNgiEtSdqymapA&libraries=places"></script>

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
            echo("Hello ". $_SESSION['user_name'] .", <a style='align: right;' href='saved_trips.php' class='btn btn-success'> View Saved Trips </a>
              <a style='align: right;' href='login.php?logout' class='btn btn-danger'> Logout </a>");

        } else {
            echo(" <a href='login.php' class='btn btn-success pull-right'> Login </a>
      <a href='register.php' class='btn btn-primary pull-right'>Register</a>");
        }

      ?>
      <br><br><h3>Plan Your Trip: </h3>
      <br>
          <div class="card">
            <div class="card-body">
              <p class="card-text">
                </p><form class="form-inline">
                <label class="sr-only" for="inlineFormInput">Start Point</label>
                <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="start_location" placeholder="Start Point" type="text" required="">

                <label class="sr-only" for="inlineFormInputGroup">End Point</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <input class="form-control" id="end_location" placeholder="End Point" type="text" required="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup">Start Date</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <input class="form-control" id="start_date" placeholder="Start Date" type="date">
                </div>
                <label class="sr-only" for="inlineFormInputGroup">End Date</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <input class="form-control" id="end_date" placeholder="End Date" type="date" required="">
                </div>
              <p></p>
              <br>
              <a id="startBtn" class="btn btn-primary">Start</a>
            </form></div>
          </div>
    </div>
<!--  AIzaSyBygxeV-oz78Ea1RRelQzNgiEtSdqymapA
 -->    <script>
            //set up autocomplete
            function init() {
                var input1 = document.getElementById('start_location');
                var autocomplete = new google.maps.places.Autocomplete(input1);

                var input2 = document.getElementById('end_location');
                var autocomplete = new google.maps.places.Autocomplete(input2);
            }

            google.maps.event.addDomListener(window, 'load', init);
        </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      $("#startBtn").click(function(e){
        $.get("store_data.php",
        {
          start_loc: $("#start_location").val(),
          end_loc: $("#end_location").val(),
          start_date : $("#start_date").val(),
          end_date : $("#end_date").val()
        },
        function(data,status){
             url = "demo1.php?start="+$("#start_location").val() + "&end=" + $("#end_location").val();
             window.location.href = url;
        });
        //e.preventDefault();
    });
    });
    </script>

</body></html>
