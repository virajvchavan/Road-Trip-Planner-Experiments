<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Road Trip Planner</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

  </head>
  <body>
    <div class="container">
      <br><br><h3>Add Tourist Spots to the Trip: <a href="summary.php?trip=<?php echo $_GET['trip']; ?>" class="btn btn-success float-right">Next</a></h3>
      <br>
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Belagavi,+Karnataka/@15.866867,74.4383994,12z/data=!3m1!4b1!4m5!3m4!1s0x3bbf669f5095362f:0x7e34b31edcdefb5f!8m2!3d15.8496953!4d74.4976741" target="_blank"><h4 class="card-title">Belagavi, Karnataka</h4></a>
              <p class="card-text">
                Belgaum is a city in the Indian state of Karnataka 
located in its northern part along the Western Ghats. It is the 
administrative headquarters of the eponymous Belgaum division and 
Belgaum district.
              </p>
              <a id="spot1" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#spot1").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              spot_name: "Belagavi, Karnataka",
              spot_link: "https://www.google.co.in/maps/place/Belagavi,+Karnataka/@15.866867,74.4383994,12z/data=!3m1!4b1!4m5!3m4!1s0x3bbf669f5095362f:0x7e34b31edcdefb5f!8m2!3d15.8496953!4d74.4976741",
              spot_addr : "Belagavi, Karnatakaa",
              spot_descr: "Belgaum is a city in the Indian state of Karnataka located in its northern part along the Western Ghats. It is the administrative headquarters of the eponymous Belgaum division and Belgaum district.",
              spot_rating: "",
              user_id: 2
            },
            function(data,status){
                  $("#spot1").addClass('btn-success');
                  $("#spot1").html("Added to trip!");
            });
          });
        </script>


        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Kopeshwar+Temple./@16.6159102,74.6832043,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc0dc00bfffffff:0x58f412d9875c44ec!8m2!3d16.6159051!4d74.685393" target="_blank"><h4 class="card-title">Kopeshwar Temple</h4></a>
              <p class="card-text">
                Rajapur Main Rd, Khidrapur, Karnataka 416108<br>
                Rating: 4.9/5
              </p>
              <a id="spot2" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#spot2").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              spot_name: "Kopeshwar Temple",
              spot_link: "https://www.google.co.in/maps/place/Kopeshwar+Temple./@16.6159102,74.6832043,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc0dc00bfffffff:0x58f412d9875c44ec!8m2!3d16.6159051!4d74.685393",
              spot_addr : "Rajapur Main Rd, Khidrapur, Karnataka 416108",
              spot_descr: "",
              spot_rating: "4.9/5",
              user_id: 2
            },
            function(data,status){
                  $("#spot2").addClass('btn-success');
                  $("#spot2").html("Added to trip!");
            });
          });
        </script>

      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Bhimgad+Adventure+Camp/@15.7217254,74.4791182,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbf6ed09fc890c1:0x35171c2a32eb9d7e!8m2!3d15.7217202!4d74.4813069" target="_blank"><h4 class="card-title">Bhimgad Adventure Camp</h4></a>
              <p class="card-text">
                Opposite Belgaum Golf Course, Katgali Road, Desur, Khanapur, Belgaum, Karnataka 590014<br>
                Rating: 5.0/5
              </p>
              <a id="spot3" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#spot3").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              spot_name: "Bhimgad Adventure Camp",
              spot_link: "https://www.google.co.in/maps/place/Bhimgad+Adventure+Camp/@15.7217254,74.4791182,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbf6ed09fc890c1:0x35171c2a32eb9d7e!8m2!3d15.7217202!4d74.4813069",
              spot_addr : "Opposite Belgaum Golf Course, Katgali Road, Desur, Khanapur, Belgaum, Karnataka 590014",
              spot_descr: "",
              spot_rating: "5.0/5",
              user_id: 2
            },
            function(data,status){
                  $("#spot3").addClass('btn-success');
                  $("#spot3").html("Added to trip!");
            });
          });
        </script>


        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Ancestral+Goa/@15.3398295,73.9842235,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbfb054f7d4e441:0x5cd3e1ecd2f5bf60!8m2!3d15.3398243!4d73.9864122" target="_blank"><h4 class="card-title">Ancestral Goa</h4></a>
              <p class="card-text">
                Outdoor cultural museum featuring a recreated ancient Goa village, with pottery making and dancing.<br>
                Near Saviour of the World Church, Loutolim, Loutolim, Goa, Goa 403718<br>
                Rating: 3.9/5.0
              </p>
              <a id="spot4" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#spot4").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              spot_name: "Ancestral Goa",
              spot_link: "https://www.google.co.in/maps/place/Ancestral+Goa/@15.3398295,73.9842235,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbfb054f7d4e441:0x5cd3e1ecd2f5bf60!8m2!3d15.3398243!4d73.9864122",
              spot_addr : "Near Saviour of the World Church, Loutolim, Loutolim, Goa, Goa 403718",
              spot_descr: "Outdoor cultural museum featuring a recreated ancient Goa village, with pottery making and dancing.",
              spot_rating: "3.9/5",
              user_id: 2
            },
            function(data,status){
                  $("#spot4").addClass('btn-success');
                  $("#spot4").html("Added to trip!");
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
              <a id="spot5" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $("#spot5").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              spot_name: "Varanda Do Mar",
              spot_link: "https://www.google.co.in/maps/place/Varanda+Do+Mar/@15.8605429,73.978382,9z/data=!4m8!1m2!2m1!1shotels+in+goa!3m4!1s0x3bbfc0c30b94e0b9:0x47711930073f99e4!8m2!3d15.476667!4d73.809269",
              spot_addr : "Near Goa Science Center, Miramar, Panjim, Goa 403002",
              spot_descr: "",
              spot_rating: "4.1/5",
              user_id: 2
            },
            function(data,status){
                  $("#spot5").addClass('btn-success');
                  $("#spot5").html("Added to trip!");
            });
          });
        </script>

        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Vasco+da+Gama,+Goa/@15.3930202,73.7995848,14z/data=!3m1!4b1!4m5!3m4!1s0x3bbfc7f3635e9997:0x5f896b7ce330450e!8m2!3d15.3860329!4d73.8440398" target="_blank"><h4 class="card-title">Vasco da Gama</h4></a>
              <p class="card-text">
                Vasco da Gama is a city on the Mormugao peninsula in 
Goa, western India. The coast is dotted with beaches like Baina Beach, 
and has a natural harbor. On the headland, overlooking Varca Beach, 
17th-century Mormugao Fort has 2 fountains. Dating from the 16th 
century, St. Andrew’s Church has gilded altars.
              </p>
              <a id="spot6" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

         <script type="text/javascript">
          $("#spot6").click(function(){
            $.post("store_data.php",
            {
              trip_id: <?php echo $_GET['trip'];?>,
              spot_name: "Vasco da Gama",
              spot_link: "https://www.google.co.in/maps/place/Vasco+da+Gama,+Goa/@15.3930202,73.7995848,14z/data=!3m1!4b1!4m5!3m4!1s0x3bbfc7f3635e9997:0x5f896b7ce330450e!8m2!3d15.3860329!4d73.8440398",
              spot_addr : "",
              spot_descr: "Vasco da Gama is a city on the Mormugao peninsula in Goa, western India. The coast is dotted with beaches like Baina Beach, and has a natural harbor. On the headland, overlooking Varca Beach, 17th-century Mormugao Fort has 2 fountains. Dating from the 16th century, St. Andrew’s Church has gilded altars.",
              spot_rating: "",
              user_id: 2
            },
            function(data,status){
                  $("#spot6").addClass('btn-success');
                  $("#spot6").html("Added to trip!");
            });
          });
        </script>

      </div>
      <br>
    </div>
    <br>

  
</body></html>