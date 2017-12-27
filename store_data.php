<?php

include "conn.inc.php";

//only echo the neccessary things


//storing start/end locations/dates (A new trip row is created in database)
//echo back the newly added trip's id (DO NOT echo ANYTHING ELSE)
if(isset($_POST['start_loc']) && !empty($_POST['start_loc']) && isset($_POST['end_loc']) && !empty($_POST['end_loc']) && isset($_POST['start_date']) && isset($_POST['end_date']))
{
	//echo $_POST['start_date'];
	$query = "INSERT INTO `trips` (`id`, `start_addr`, `end_addr`, `start_date`, `end_date`, `user_id`) VALUES (NULL, '".$_POST['start_loc']."' , '".$_POST['end_loc']."', '".$_POST['start_date']."', '".$_POST['end_date']."', '2')";

	if(mysqli_query($conn, $query))
	{
		$query1 = "SELECT max(id) FROM trips WHERE user_id='2'";
        if($run = mysqli_query($conn, $query1))
        {
            while($array = mysqli_fetch_assoc($run))
            {
                echo $array['max(id)'];
            }
        }
	    //echo "mysql_insert_id()";
	}
	else
	    echo "mysqli_error()";
}


//storing hotels for a trip
if(isset($_POST['trip_id']) && !empty($_POST['trip_id']) && isset($_POST['hotel_name']) && !empty($_POST['hotel_name']) && isset($_POST['hotel_addr']) && isset($_POST['hotel_website']) && isset($_POST['hotel_phone']) && isset($_POST['hotel_rating']) && isset($_POST['hotel_link']))
{
	//echo $_POST['start_date'];
	$query = "INSERT INTO `hotels` (`id`, `link`, `user_id`, `trip_id`, `name`, `address`, `phone`, `website`, `rating`) VALUES (NULL, '".$_POST['hotel_link']."', '".$_POST['user_id']."' ,'".$_POST['trip_id']."' , '".$_POST['hotel_name']."', '".$_POST['hotel_addr']."', '".$_POST['hotel_phone']."', '".$_POST['hotel_website']."', '".$_POST['hotel_rating']."')";

	echo $query;
	if(mysqli_query($conn, $query))
	{
		echo "hotel inserted";
	}
	else
	    echo "mysqli_error()";
}

//storing petrol pumps for a trip
if(isset($_POST['trip_id']) && !empty($_POST['trip_id']) && isset($_POST['petrol_name']) && !empty($_POST['petrol_name']) && isset($_POST['petrol_addr']) && isset($_POST['petrol_link']))
{
	//echo $_POST['start_date'];
	$query = "INSERT INTO `petrol` (`id`, `name`, `addr`, `link`, `user_id`, `trip_id`) VALUES (NULL, '".$_POST['petrol_name']."', '".$_POST['petrol_addr']."' ,'".$_POST['petrol_link']."' , '".$_POST['user_id']."', '".$_POST['trip_id']."')";

	echo $query;
	if(mysqli_query($conn, $query))
	{
		echo "petrol inserted";
	}
	else
	    echo "mysqli_error()";
}

//storing tourist spots for a trip
if(isset($_POST['trip_id']) && !empty($_POST['trip_id']) && isset($_POST['spot_name']) && !empty($_POST['spot_name']) && isset($_POST['spot_addr']) && isset($_POST['spot_link']) && isset($_POST['spot_descr']) && isset($_POST['spot_rating']))
{
	//echo $_POST['start_date'];
	$query = "INSERT INTO `spots`(`id`, `name`, `addr`, `link`, `user_id`, `trip_id`, `descr`, `rating`) VALUES (NULL, '".$_POST['spot_name']."', '".$_POST['spot_addr']."' ,'".$_POST['spot_link']."' , '".$_POST['user_id']."', '".$_POST['trip_id']."', '".$_POST['spot_descr']."', '".$_POST['spot_rating']."')";

	echo $query;
	if(mysqli_query($conn, $query))
	{
		echo "spot inserted";
	}
	else
	    echo "mysqli_error()";
}

?>