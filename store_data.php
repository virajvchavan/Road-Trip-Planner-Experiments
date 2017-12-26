<?php

include "conn.inc.php";

//only echo the neccessary things


//echo back the newly added trip's id
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

?>