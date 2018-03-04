<?php
$servername = "localhost";
$username_db = "root";
$password = "password123";
$dbname = "rtp";
// Create connection

$conn = new mysqli($servername, $username_db, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

?>