<?php
global $base_url;
$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ekart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3308) or die("not connected");;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>