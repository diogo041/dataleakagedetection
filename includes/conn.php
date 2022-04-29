<?php

// Input your information for the database here

// Host name
$host = "20.207.112.218:3306";

// Database username
$username = "root";

// Database password
$password = "root";

// Name of database
$database = "dataleakage";

$conn = mysqli_connect($host, $username, $password) or die ("Could not connect");
$db = mysqli_select_db($conn, $database) or die ("Could not select DB");

?>