<?php 
$servername = "localhost";
$username = "sfangcom_eatery";
$password = "X2HGyHaey!Esdn9";
$dbname = "sfangcom_eatery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>