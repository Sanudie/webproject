<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "street_paws";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally set character set
$conn->set_charset("utf8mb4");

?>
