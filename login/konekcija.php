<?php

// kreiramo konekciju ka bazi

$servername = "localhost";
$username = "root";
$password = "";
$db = "don22";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";