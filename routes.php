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
    
    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

  </head>

  <?php

      include "conn.inc.php";
      
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
    <br><br><h3>Confirm the route: <a href="hotels.php?trip=<?php echo $_GET['trip']; ?>" class="btn btn-success float-right">Confirm</a> </h3>
      <br>
      
      <iframe src="//www.google.com/maps/embed/v1/directions?origin=<?php echo $start_addr;?>&destination=<?php echo $end_addr; ?>&key= AIzaSyBG1_Qr69oaBJp_z9vQRyDBNuJiIGv-UxA" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>Loading...
      </iframe>
    
    </div>
      <br>
    

  
</body></html>