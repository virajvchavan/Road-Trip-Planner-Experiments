<?php
error_reporting(-1);
include 'conn.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>Road Trip Planner</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <script src="js/jquery-3.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.js"></script>

      <script src="http://maps.google.com/maps/api/js?key=AIzaSyBG1_Qr69oaBJp_z9vQRyDBNuJiIGv-UxA" type="text/javascript"></script>
      <script src="js/gmaps.js" type="text/javascript"></script>

  </head>

      <?php

      if(isset($_GET['trip']) && !empty($_GET['trip']))
      {
        $query = "SELECT * FROM trips WHERE id = ".$_GET['trip'];
        if($run = mysqli_query($conn, $query))
        {
            if(mysqli_num_rows($run) != 1)
            {
                header("Location:index.php");
            }
            while($array = mysqli_fetch_assoc($run))
            {
                $start_addr = $array['start_addr'];
                $end_addr = $array['end_addr'];
                $start_date = $array['start_date'];
                $end_date = $array['end_date'];
                $trip_user_id = $array['user_id'];
           }
         }
       }
       else
       {
        echo "trip id kuthe aahe bhavaa?";
       }

      ?>
  <body>
    <div class="container">
      <br><br><h3>Trip Summary: <a onclick="window.print()" class="btn btn-success float-right">Print</a> &nbsp; <a class="btn btn-success float-right" data-toggle='modal' data-target='#map_modal' style="margin-right: 15px;">Open Map</a></h3>

      <div class="modal fade" id="map_modal" role="dialog">
          <div class="modal-dialog modal-lg" style="max-width: 800px; width: 650px; margin: auto;">
            <div class="modal-content">
              <div class="modal-body">
               
              <div id="map" style="height: 400px; width: 500px;">
                
              </div>
              </div>
              <div class="modal-footer">
                (This is for Sangli to Goa, for demonstration)
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
    </div>
    <script type="text/javascript">
      var locations = [
        ['Hotel Adarsha Palace, Belgaum', 15.863780, 74.508215, 4],
        ['Hotel Eefa, Belgaum', 15.867947, 74.508962, 5],
        ['Hotel Varanda Do Mar, Goa', 15.476600, 73.809183, 3],
        ['The Leela, Goa', 15.156821, 73.948716, 2],
        ['HP Petrol Pump', 16.154443, 74.517483, 1],
        ['Kopeshwar Temple', 16.616192, 74.684658, 6],
        ['Bhimgad Adventure Camp', 15.721653, 74.481318, 7]
      ];

      $('#map_modal').on('shown.bs.modal', function (e) {
        
      var map = new GMaps({
        div: '#map',
        lat: 16.141078,
        lng: 74.446900,
        zoom: 8
      });
      map.drawRoute({
          origin: [16.8524, 74.5815],
          destination: [15.2993, 74.1240],
          travelMode: 'driving',
          strokeColor: '#131540',
          strokeOpacity: 0.6,
          strokeWeight: 6
        });

      for (i = 0; i < locations.length; i++) { 
        map.addMarker({
          lat: locations[i][1],
          lng: locations[i][2],
          label: locations[i][0],
          infoWindow: {
            content: '<p> '+locations[i][0] + '</p>'
          }
        });
      }
         
        
      });
      

    </script>  
      <br>

      <h4><span class="badge badge-primary"><?php echo $start_addr; ?></span> -------&gt; <span class="badge badge-primary"><?php echo $end_addr; ?></span></h4><br>
      <h4><span class="badge badge-secondary"><?php echo $start_date; ?></span> ---------&gt; <span class="badge badge-secondary"><?php echo $end_date; ?></span><hr>


      </h4><h4>Hotels: <?php echo "<a data-toggle='modal' data-target='#hotel_modal' class='btn btn-success' href='hotels.php?trip=".$_GET['trip']."'><b>+</b></a>"; ?></h4>

      <div class="modal fade" id="hotel_modal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body" style="height: 550px;">
                <iframe src="hotels.php?trip=<?php echo $_GET['trip']; ?>" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
      </div>

      <?php

      $query_hotels = "SELECT * FROM hotels WHERE trip_id = ".$_GET['trip'];
        if($run = mysqli_query($conn, $query_hotels))
        {
            if(mysqli_num_rows($run) == 0)
            {
                echo "You haven't added any hotels.<br>";
            }
            echo '<div class="row">
            ';
            $num=0;
            while($array = mysqli_fetch_assoc($run))
            {
                $num++;
                $hotel_name = $array['name'];
                $hotel_addr = $array['address'];
                $hotel_phone = $array['phone'];
                $hotel_website = $array['website'];
                $hotel_rating = $array['rating'];
                $hotel_link = $array['link'];

                echo '<div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <a data-toggle="modal" data-target="#'.$num.'_hmodal" href="#" target="_blank">
                      <h4 class="card-title">'.$hotel_name.'</h4></a>
                      <p class="card-text">
                        '.$hotel_addr.'<br>
                        Website: <a href="'.$hotel_website.'" target="_blank">'.$hotel_website.'</a><br>
                        Call: '.$hotel_phone.'<br>
                      </p>
                      <a href="#!" data-toggle="modal" data-target="#delete_modal" class="btn btn-danger">Remove</a>
                    </div>
                  </div>
                  </div>

                  <div class="modal fade" id="'.$num.'_hmodal" role="dialog">
                  <div class="modal-dialog modal-lg" style="max-width: 800px; width: 650px; margin: auto;">
                    <div class="modal-content">
                      <div class="modal-body">
                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBG1_Qr69oaBJp_z9vQRyDBNuJiIGv-UxA&q='.$hotel_name.'&zoom=10" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                      </iframe>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
              </div>
                ';

           }
           echo '</div>';
        }
       else
       {
        echo "hotels gandlay";
       }

      ?>
      
      <br>
      <h4>Petrol Pumps: <?php echo "<a data-toggle='modal' data-target='#petrol_modal' class='btn btn-success' href='petrol.php?trip=".$_GET['trip']."'><b>+</b></a>"; ?></h4> 

      <div class="modal fade" id="petrol_modal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body" style="height: 550px;">
                <iframe src="petrol.php?trip=<?php echo $_GET['trip']; ?>" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
    </div>

      <?php

      $query_petrol = "SELECT * FROM petrol WHERE trip_id = ".$_GET['trip'];
        if($run = mysqli_query($conn, $query_petrol))
        {
            if(mysqli_num_rows($run) == 0)
            {
                echo "You haven't added any petrol pumps.<br>";
            }
            echo '<div class="row">
            ';
            $num = 0;
            while($array = mysqli_fetch_assoc($run))
            {
                $num++;
                $petrol_name = $array['name'];
                $petrol_addr = $array['addr'];
                $petrol_link = $array['link'];

                echo '<div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <a data-toggle="modal" data-target="#'.$num.'_pmodal" href="#" target="_blank">
                      <h4 class="card-title">'.$petrol_name.'</h4></a>
                      <p class="card-text">
                        '.$petrol_addr.'<br>
                      </p>
                      <a data-toggle="modal" data-target="#delete_modal" href="#!" class="btn btn-danger">Remove</a>
                    </div>
                  </div>
                  </div>

                  <div class="modal fade" id="'.$num.'_pmodal" role="dialog">
                  <div class="modal-dialog modal-lg" style="max-width: 800px; width: 650px; margin: auto;">
                    <div class="modal-content">
                      <div class="modal-body">
                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBG1_Qr69oaBJp_z9vQRyDBNuJiIGv-UxA&q='.$petrol_name.' '.$petrol_addr.'&zoom=10" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                      </iframe>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
              </div>
                ';
           }
           echo '</div>';
        }
       else
       {
        echo "pettols gandlay";
       }

      ?>
      
      <br>


        <hr>
      <h4>Tourist Spots: <?php echo "<a data-toggle='modal' data-target='#spots_modal' class='btn btn-success' href='spots.php?trip=".$_GET['trip']."'><b>+</b></a>"; ?></h4> 

      <div class="modal fade" id="spots_modal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body" style="height: 550px;">
                <iframe src="spots.php?trip=<?php echo $_GET['trip']; ?>" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
    </div>

      <?php

      $query_spots = "SELECT * FROM spots WHERE trip_id = ".$_GET['trip'];
        if($run = mysqli_query($conn, $query_spots))
        {
            if(mysqli_num_rows($run) == 0)
            {
                echo "You haven't added any tourist spots.<br>";
            }
            echo '<div class="row">
            ';
            $num = 0;
            while($array = mysqli_fetch_assoc($run))
            {
                $num++;
                $spot_name = $array['name'];
                $spot_addr = $array['addr'];
                $spot_descr = $array['descr'];
                $spot_rating = $array['rating'];
                $spot_link = $array['link'];

                echo '<div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <a data-toggle="modal" data-target="#'.$num.'_smodal" href="#" target="_blank">
                      <h4 class="card-title">'.$spot_name.'</h4></a>
                      <p class="card-text">
                        '.$spot_addr.'<br>
                        <br>
                        '.$spot_descr.'
                        <br>
                        Rating: '.$spot_rating.'
                      </p>
                      <a data-toggle="modal" data-target="#delete_modal" href="#!" class="btn btn-danger">Remove</a>
                    </div>
                  </div>
                  </div>

                  <div class="modal fade" id="'.$num.'_smodal" role="dialog">
                  <div class="modal-dialog modal-lg" style="max-width: 800px; width: 650px; margin: auto;">
                    <div class="modal-content">
                      <div class="modal-body">
                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBG1_Qr69oaBJp_z9vQRyDBNuJiIGv-UxA&q='.$spot_name.'&zoom=10" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                      </iframe>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
              </div>
                ';

           }
           echo '</div>';
        }
       else
       {
        echo "spots gandlay";
       }

      ?>
      
      <br>
    <br>
  <div class="modal fade" id="delete_modal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  Sure to remove?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger">Remove</button>
                  <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
  </div>
  
  
</body>


</html>