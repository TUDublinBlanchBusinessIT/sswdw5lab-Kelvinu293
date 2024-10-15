<?php
//Give the name of the program here
//Include your name and the date here
//Give a brief description of what the program does
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennisclub";
$port = 3307;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>