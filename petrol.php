<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Road Trip Planner</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

  </head>
  <body>
    <div class="container">
      <br><br><h3>Add Petrol Pumps to the Trip: <a href="spots.php" class="btn btn-success float-right">Next</a></h3>
      <br>
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Bharat+Petroleum+Petrol+Pump/@16.8423452,74.5898734,12.54z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0xa939d5550fd8ff9!8m2!3d16.8630954!4d74.576633" target="_blank"><h4 class="card-title">Bharat Petroleum Petrol Pump</h4></a>
              <p class="card-text">
                Vyankatesh Nagar, Sangli, Maharashtra 416416<br>
              </p>
              <a href="#!" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Indian+Oil+Petrol+Pump/@16.042578,74.3484574,10.92z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0xf97584620ee21fda!8m2!3d16.0235408!4d74.5231819" target="_blank"><h4 class="card-title">Indian Oil Petrol Pump</h4></a>
              <p class="card-text">
                Pune-Bangalore Road, Belagavi, Karnataka 591243
              </p>
              <a href="#!" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/HP+PETROL+PUMP+-+SHRI+SAHIL+FUEL+STATION/@16.042578,74.3484574,10.92z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0x23fbd4b12398d026!8m2!3d16.1545013!4d74.5174313" target="_blank"><h4 class="card-title">HP PETROL PUMP - SHRI SAHIL FUEL STATION</h4></a>
              <p class="card-text">
                NH-4 Golden Quadilateral) Hanchanal Village Yamkanmardi, Belgaum, Karnataka 591246
              </p>
              <a href="#!" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Bharat+Petroleum/@15.8987423,74.5428857,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbf612019d16b99:0x2ce8e996273b13a8!8m2!3d15.8987372!4d74.5450744" target="_blank"><h4 class="card-title">Bharat Petrolium</h4></a>
              <p class="card-text">
                Auto Nagar, Ramteerth Nagar, Lakshmipuri Layout, Auto Nagar, Belagavi, Karnataka 590015
              </p>
              <a href="#!" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Hare+Krishna+Petrol+Pump/@15.65874,74.0845915,11.62z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x3bbf97e4eec5fef1:0xef7b6b6480e7f45c!8m2!3d15.5718306!4d74.0161002" target="_blank"><h4 class="card-title">Hare Krishna Petrol Pump</h4></a>
              <p class="card-text">
                Hpcl Dealer, Survey NO.78/1-A, Tulshimala, Poriem, Sanquelim, Tehsil Sattari, Vasco, Goa 403505
              </p>
              <a href="#!" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <a href="https://www.google.co.in/maps/place/Honda+Petrol+Pump/@15.5601129,74.0324991,11.62z/data=!4m8!1m2!2m1!1spetrol+pump!3m4!1s0x0:0x5050393997b930d8!8m2!3d15.5485057!4d74.0439034" target="_blank"><h4 class="card-title">Honda Petrol Pump</h4></a>
              <p class="card-text">
                Honda, Goa 403530
              </p>
              <a href="#!" class="btn btn-primary">Add to Trip</a>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
    <br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
      $(".btn-primary").click(function(){
        $(this).addClass('btn-success');
        $(this).html("Added to trip!")
      });
    </script>
  
</body></html>