<?php

$servername = "localhost";
$username = "elizangela";
$password = "981077143";
$dbname = "monitoria ";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>