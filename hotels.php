<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Road Trip Planner</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    

    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

  </head>
  <body>
    <div class="container">
      <br><br><h3>Add Hotels to the Trip: <a href="petrol.php?trip=<?php echo $_GET['trip']; ?>" class="btn btn-success float-right">Next</a></h3>
      <br>
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Hotel+Eefa,+Belgaum/@15.8584565,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66ae79c86fc5:0xeb692048b4492231!8m2!3d15.868097!4d74.508962" target="_blank"><h4 class="card-title">Hotel Eefa, Belgaum</h4></a>
              <p class="card-text">
                3935 Club Road, Kallehol, Camp, Belagavi, Karnataka 590001<br>
                Website: <a href="http://www.eefahotels.com/" target="_blank">eefahotels.com</a><br>
                Call: 08312498777<br>
                Rating: 4.0/5
              </p>
              <a id="hotel1" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $("#hotel1").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              hotel_name: "Hotel Eefa, Belgaum",
              hotel_link: "https://www.google.co.in/maps/place/Hotel+Eefa,+Belgaum/@15.8584565,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66ae79c86fc5:0xeb692048b4492231!8m2!3d15.868097!4d74.508962",
              hotel_addr : "3935 Club Road, Kallehol, Camp, Belagavi, Karnataka 590001",
              hotel_website : "http://www.eefahotels.com/",
              hotel_phone: "08312498777",
              hotel_rating: "4.0/5",
              user_id: 2
            },
            function(data,status){
                  $("#hotel1").addClass('btn-success');
                  $("#hotel1").html("Added to trip!");
            });
          });
        </script>

        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Hotel+Sankam+Residency/@15.8585377,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66c5dc2d2ac9:0x317050ba130f7cde!8m2!3d15.8624292!4d74.5294633" target="_blank"><h4 class="card-title">Hotel Sankam Residency</h4></a>
              <p class="card-text">
                Airport Road, Off National Highway 4, Gandhinagar, Azad Nagar, Belagavi, Karnataka 590016
<br>
                Website: <a href="http://sankam.in/" target="_blank">sankam.in</a><br>
                Call: 08314207888<br>
                Rating: 4.0/5
              </p>
              <a id="hotel2" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#hotel2").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              hotel_name: "Hotel Sankam Residency",
              hotel_link: "https://www.google.co.in/maps/place/Hotel+Sankam+Residency/@15.8585377,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf66c5dc2d2ac9:0x317050ba130f7cde!8m2!3d15.8624292!4d74.5294633",
              hotel_addr : "Airport Road, Off National Highway 4, Gandhinagar, Azad Nagar, Belagavi, Karnataka 590016",
              hotel_website : "http://sankam.in/",
              hotel_phone: "08314207888",
              hotel_rating: "4.0/5",
              user_id: 2
            },
            function(data,status){
                  $("#hotel2").addClass('btn-success');
                  $("#hotel2").html("Added to trip!");
            });
          });
        </script>
      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Hotel+Adarsha+Palace/@15.8586188,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf669f5095362f:0xc888250c3ed94c48!8m2!3d15.8638421!4d74.5081404" target="_blank"><h4 class="card-title">Hotel Adarsha Palace</h4></a>
              <p class="card-text">
                #3360/2B,College Road, Opp. Lingaraj College, Khade Bazar, Raviwar Peth, Belagavi, Karnataka 590001
<br>
                Website: <a href="http://hoteladarshapalace.com/" target="_blank">
hoteladarshapalace.com</a><br>
                Call: 08312435777<br>
                Rating: 3.5/5
              </p>
              <a id="hotel3" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#hotel3").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              hotel_name: "Hotel Adarsha Palace",
              hotel_link: "https://www.google.co.in/maps/place/Hotel+Adarsha+Palace/@15.8586188,74.5214057,14z/data=!4m8!1m2!2m1!1shotels+in+belgavi!3m4!1s0x3bbf669f5095362f:0xc888250c3ed94c48!8m2!3d15.8638421!4d74.5081404",
              hotel_addr : "#3360/2B,College Road, Opp. Lingaraj College, Khade Bazar, Raviwar Peth, Belagavi, Karnataka 590001",
              hotel_website : "http://hoteladarshapalace.com/",
              hotel_phone: "08312435777",
              hotel_rating: "3.5/5",
              user_id: 2
            },
            function(data,status){
                  $("#hotel3").addClass('btn-success');
                  $("#hotel3").html("Added to trip!");
            });
          });
        </script>

        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Taj+Fort+Aguada+Resort+%26+Spa,+Goa/@15.8593414,73.978395,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x3bbfc175b543664d:0xc2b14e0b1a4873ef!8m2!3d15.4974484!4d73.7669604" target="_blank"><h4 class="card-title">Taj Fort Aguada Resort and Spa, Goa</h4></a>
              <p class="card-text">
                Sinquerim, Candolim, Bardez, Goa 403515<br>
                Website: <a href="http://taj.tajhotels.com/" target="_blank">taj.tajhotels.com</a><br>
                Call: 08326645858<br>
                Rating: 4.5/5
              </p>
              <a id="hotel4" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#hotel4").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              hotel_name: "Taj Fort Aguada Resort and Spa, Goa",
              hotel_link: "https://www.google.co.in/maps/place/Taj+Fort+Aguada+Resort+%26+Spa,+Goa/@15.8593414,73.978395,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x3bbfc175b543664d:0xc2b14e0b1a4873ef!8m2!3d15.4974484!4d73.7669604",
              hotel_addr : "Sinquerim, Candolim, Bardez, Goa 403515",
              hotel_website : "http://taj.tajhotels.com/",
              hotel_phone: "08326645858",
              hotel_rating: "4.5/5",
              user_id: 2
            },
            function(data,status){
                  $("#hotel4").addClass('btn-success');
                  $("#hotel4").html("Added to trip!");
            });
          });
        </script>

      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Varanda+Do+Mar/@15.8605429,73.978382,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x3bbfc0c30b94e0b9:0x47711930073f99e4!8m2!3d15.476667!4d73.809269" target="_blank"><h4 class="card-title">Varanda Do Mar</h4></a>
              <p class="card-text">
                Near Goa Science Center, Miramar, Panjim, Goa 403002<br>
                Website: <a href="http://varandadomar.com/" target="_blank">varandadomar.com</a><br>
                Call: 08322464400<br>
                Rating: 4.1/5
              </p>
              <a id="hotel5" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#hotel5").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              hotel_name: "Varanda Do Mar",
              hotel_link: "https://www.google.co.in/maps/place/Varanda+Do+Mar/@15.8605429,73.978382,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x3bbfc0c30b94e0b9:0x47711930073f99e4!8m2!3d15.476667!4d73.809269",
              hotel_addr : "Near Goa Science Center, Miramar, Panjim, Goa 403002",
              hotel_website : "http://varandadomar.com/",
              hotel_phone: "08322464400",
              hotel_rating: "4.1/5",
              user_id: 2
            },
            function(data,status){
                  $("#hotel5").addClass('btn-success');
                  $("#hotel5").html("Added to trip!");
            });
          });
        </script>

        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/The+Leela+Goa/@15.8605429,73.978382,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x0:0xc023d7efb70a49a2!8m2!3d15.156808!4d73.9486313" target="_blank"><h4 class="card-title">The Leela Goa</h4></a>
              <p class="card-text">
                Mobor, Cavelossim, Salcette, Goa 403731<br>
                Website: <a href="http://theleela.com/" target="_blank">theleela.com</a><br>
                Call: 08326621234<br>
                Rating: 4.6/5
              </p>
              <a id="hotel6" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

         <script type="text/javascript">
          $("#hotel6").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              hotel_name: "The Leela Goa",
              hotel_link: "https://www.google.co.in/maps/place/The+Leela+Goa/@15.8605429,73.978382,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x0:0xc023d7efb70a49a2!8m2!3d15.156808!4d73.9486313",
              hotel_addr : "Mobor, Cavelossim, Salcette, Goa 403731",
              hotel_website : "http://theleela.com/",
              hotel_phone: "08326621234",
              hotel_rating: "4.3/5",
              user_id: 2
            },
            function(data,status){
                  $("#hotel6").addClass('btn-success');
                  $("#hotel6").html("Added to trip!");
            });
          });
        </script>

      </div>
      <br>
    </div>
    <br>

    
  
</body></html>