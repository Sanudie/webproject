<?php
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

// Additional configuration if needed

// Close the connection when done (this should be done at the end of your PHP scripts)
// $conn->close();
?>
