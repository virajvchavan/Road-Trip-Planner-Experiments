<?php
error_reporting(-1);
include 'conn.inc.php';

?>
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
               <iframe src="//www.google.com/maps/embed/v1/directions?origin=<?php echo $start_addr;?>&destination=<?php echo $end_addr; ?>&key= AIzaSyBG1_Qr69oaBJp_z9vQRyDBNuJiIGv-UxA" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
              </iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
    </div>
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
                      <a data-toggle="modal" data-target="#'.$num.'_modal" href="#" target="_blank">
                      <h4 class="card-title">'.$hotel_name.'</h4></a>
                      <p class="card-text">
                        '.$hotel_addr.'<br>
                        Website: <a href="'.$hotel_website.'" target="_blank">'.$hotel_website.'</a><br>
                        Call: '.$hotel_phone.'<br>
                      </p>
                      <a href="#!" class="btn btn-danger">Remove</a>
                    </div>
                  </div>
                  </div>

                  <div class="modal fade" id="'.$num.'_modal" role="dialog">
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
<hr>
      </h4><h4>Petrol Pumps: <?php echo "<a data-toggle='modal' data-target='#petrol_modal' class='btn btn-success' href='petrol.php?trip=".$_GET['trip']."'><b>+</b></a>"; ?></h4> 

      <div class="modal fade" id="petrol_modal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body" style="height: 550px;">
                <iframe src="petrol.php?=<?php echo $_GET['trip']; ?>" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
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
            while($array = mysqli_fetch_assoc($run))
            {
                $petrol_name = $array['name'];
                $petrol_addr = $array['addr'];
                $petrol_link = $array['link'];

                echo '<div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <a href="'.$petrol_link.'" target="_blank">
                      <h4 class="card-title">'.$petrol_name.'</h4></a>
                      <p class="card-text">
                        '.$petrol_addr.'<br>
                      </p>
                      <a href="#!" class="btn btn-danger">Remove</a>
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
      </h4><h4>Tourist Spots: <?php echo "<a data-toggle='modal' data-target='#spots_modal' class='btn btn-success' href='spots.php?trip=".$_GET['trip']."'><b>+</b></a>"; ?></h4> 

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
            while($array = mysqli_fetch_assoc($run))
            {
                $spot_name = $array['name'];
                $spot_addr = $array['addr'];
                $spot_descr = $array['descr'];
                $spot_rating = $array['rating'];
                $spot_link = $array['link'];

                echo '<div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <a href="'.$spot_link.'" target="_blank">
                      <h4 class="card-title">'.$spot_name.'</h4></a>
                      <p class="card-text">
                        '.$spot_addr.'<br>
                        <br>
                        '.$spot_descr.'
                        <br>
                        Rating: '.$spot_rating.'
                      </p>
                      <a href="#!" class="btn btn-danger">Remove</a>
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

  
</body></html>